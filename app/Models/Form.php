<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Contracts\Providers\Auth;

class Form extends Model
{


    use HasFactory;
    protected $fillable = ['nameOfProperty','category','description','gmap','price','image'];
}
