<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materi extends Model
{
    public function learningpath(): BelongsTo
    {
        return $this->belongsTo(LearningPath::class,'learning_path_id');
    }
    use HasFactory;
    protected $table = 'materi';

    protected $fillable = [
        'judul',
        'deskripsi',
        'isi',
        'image',
    ];

    protected $casts = [
        'timestamps' => 'datetime',
    ];
    
}