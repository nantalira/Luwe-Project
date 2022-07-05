<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDetail extends Model
{
    protected $table = 'detail';
    public function getwarung($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
