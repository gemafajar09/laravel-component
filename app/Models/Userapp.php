<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userapp extends Model
{
    use HasFactory;

    protected $guard = 'login';
    protected $table = 'userapps';
    protected $fillable = ['nama','email','username','password'];
}
