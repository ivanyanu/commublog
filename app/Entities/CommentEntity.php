<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class CommentEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
    protected $attributes = [
        'id' => null,
        'user_id' => null,
        'post_id' => null,
        'body' => null,
        'created_at' => null,
        'updated_at' => null,
    ];
}
