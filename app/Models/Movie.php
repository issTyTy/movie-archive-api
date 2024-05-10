<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movie';
    protected $fillable = ['name', 'production', 'geners_id', 'director', 'rate', 'cover', 'video'];
    public $timestamps = false; // Disable timestamps
}
