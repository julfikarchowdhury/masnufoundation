<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Donator extends Authenticatable
{
    use HasFactory;
    //protected $guard = 'admin';
    protected $guard = 'donator';
}
