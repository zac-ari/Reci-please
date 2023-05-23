<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['UserID','Username', 'Email', 'Fav1','Fav2','Fav3','Fav4','Fav5','Fav6','Fav7','Fav8','Fav9'];
}