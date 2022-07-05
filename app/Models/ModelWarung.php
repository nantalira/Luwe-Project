<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWarung extends Model
{
    protected $table = 'warung';
    public function getwarung($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
