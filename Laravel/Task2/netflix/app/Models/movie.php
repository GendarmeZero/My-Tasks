<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Define which attributes can be mass assigned
    protected $fillable = [
        'moive_name',
        'moive_description',
        'moive_genre',
    ];
}
