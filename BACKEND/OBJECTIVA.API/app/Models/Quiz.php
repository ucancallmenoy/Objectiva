<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizzes'; // Define the table name

    protected $fillable = [
        'category',
        'question',
        'a',
        'b',
        'c',
        'd',
        'correct',
        'explanation',
        'code'
    ];
}


