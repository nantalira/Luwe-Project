<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRequest extends Model
{
    protected $table = 'request';
    public function getAll()
    {
        return $this->findAll();
    }
    //fungsi create
    public function create($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
