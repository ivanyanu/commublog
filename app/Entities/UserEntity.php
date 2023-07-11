<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class UserEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
    protected $attributes = [
        'id' => null,
        'username' => null,
        'password' => null,
        'email' => null,
        'created_at' => null,
        'updated_at' => null,
    ];
    
    // Hash password whenever it is set.
    public function setPassword(string $pass){
        $this->attributes['password'] = password_hash($pass, PASSWORD_BCRYPT);
        return $this;
    }
}
