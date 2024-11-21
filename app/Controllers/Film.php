<?php

namespace App\Controllers;

use App\Models\ListfilmModel; 

class Film extends BaseController
{
    protected $filmModel;

    public function __construct()
    {
        $this->filmModel = new ListFilmModel(); 
    }

    public function index()
    {
        $data['films'] = $this->filmModel->findAll(); 
        return view('listfilm', $data);
    }

    public function create()
    {
        return view('createfilm');
    }

    public function store()
    {
        $file = $this->request->getFile('cover');
        $newName = '';

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'sutradara' => $this->request->getPost('sutradara'),
            'synopsis' => $this->request->getPost('synopsis'),
            'cover' => $newName,
        ];

        log_message('debug', 'Data yang akan disimpan: ' . json_encode($data));

        $result = $this->filmModel->save($data);

        if ($result) {
            return redirect()->to('/film')->with('message', 'Film berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data ke database.');
        }
    }

    public function edit($id)
    {
        $data = [
            'film' => $this->filmModel->find($id),
            'validation' => \Config\Services::validation()
        ];

        // Cek apakah data ditemukan
        if (empty($data['film'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Film dengan ID ' . $id . ' tidak ditemukan.');
        }

        // Set base URL untuk gambar
        $data['image_url'] = base_url('public/uploads/' . $data['film']['cover']);

        return view('editfilm', $data);
    }

    public function detail($id)
    {
        $data['film'] = $this->filmModel->find($id); 
        if (!$data['film']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data film tidak ditemukan.');
        }
        return view('detailfilm', $data);
    }

    public function update($id)
    {
        $film = $this->filmModel->find($id);

        if (!$film) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Film tidak ditemukan.');
        }

        $file = $this->request->getFile('cover');
        $coverName = $film['cover']; // Gunakan file lama sebagai default

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);

            $coverName = $newName;

            if (!empty($film['cover']) && file_exists('uploads/' . $film['cover']) && $film['cover'] !== $newName) {
                unlink('uploads/' . $film['cover']);
            }
        }

        $this->filmModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'sutradara' => $this->request->getPost('sutradara'),
            'synopsis' => $this->request->getPost('synopsis'),
            'cover' => $coverName,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/film/detail/' . $id)->with('success', 'Film berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->filmModel->delete($id);
        return redirect()->to('/film');
    }
}