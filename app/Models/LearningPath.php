<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class LearningPath extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_lps', 'lps_id', 'users_id');
    }
    public function materis(): HasMany
    {
        return $this->hasMany(Materi::class,'learning_path_id');
    }
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