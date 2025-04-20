<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonProgress extends Model
{
    protected $table = 'lesson_progress';
    
    protected $fillable = [
        'user_id',
        'lesson_id',
        'completed',
        'last_section'
    ];

    protected $casts = [
        'completed' => 'boolean',
        'last_section' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
