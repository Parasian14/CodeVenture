<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningPath extends Model
{
    protected $table = 'learning_path';
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'isi',
        'image',
    ];
    protected $casts = [
        'timestamps' => 'datetime',
    ];
}