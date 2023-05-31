<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['UserID', 'Username', 'Email', 'Password', 'Fav1', 'Fav2', 'Fav3', 'Fav4', 'Fav5', 'Fav6', 'Fav7', 'Fav8', 'Fav9'];

    protected $casts = [
        'Fav1' => 'integer',
        'Fav2' => 'integer',
        'Fav3' => 'integer',
        'Fav4' => 'integer',
        'Fav5' => 'integer',
        'Fav6' => 'integer',
        'Fav7' => 'integer',
        'Fav8' => 'integer',
        'Fav9' => 'integer',
    ];
}
