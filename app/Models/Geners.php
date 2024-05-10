<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geners extends Model
{
    use HasFactory;
    protected $table = 'geners';
    protected $fillable = ['name'];
    public $timestamps = false; // Disable timestamps
}
