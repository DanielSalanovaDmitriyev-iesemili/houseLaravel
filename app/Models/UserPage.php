<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class UserPage extends Model
{
    public $timestamps = false; // para sacar las dos columnas de updated ...
    protected $table = "users"; 
}
