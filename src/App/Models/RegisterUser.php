<?php

namespace Devpac\RegisterLogin\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    use HasFactory;

    protected $table = 'register_users';

    protected $fillable = [
        'name','email','password'
    ];
}
