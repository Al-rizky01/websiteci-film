<?php

namespace App\Models;

use CodeIgniter\Model;

class ListfilmModel extends Model
{
    protected $table = 'listfilm'; // Nama tabel di database
    protected $primaryKey = 'id'; // Kolom primary key
    protected $allowedFields = ['judul', 'sutradara', 'synopsis', 'cover', 'created_at', 'updated_at']; // Kolom yang boleh diisi
    protected $useTimestamps = true; // Otomatis mengisi created_at dan updated_at
    
}