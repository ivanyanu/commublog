<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class PostEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
    protected $attributes = [
        'id' => null,
        'user_id' => null,
        'category_id' => null,
        'title' => null,
        'body' => null,
        'created_at' => null,
        'updated_at' => null,
    ];
}
