<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username', 'email', 'password', 'role'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
