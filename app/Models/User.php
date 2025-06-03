<?php

namespace App\Models;

use App\Enums\UserTypeEnum;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    protected $fillable = [
        'id',
        'uuid',
        'name',
        'email',
        'password',
        'user_type'
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'uuid' => 'string',
            'name' => 'string',
            'email' => 'string',
            'password' => 'hashed',
            'user_type' => UserTypeEnum::class
        ];
    }
}
