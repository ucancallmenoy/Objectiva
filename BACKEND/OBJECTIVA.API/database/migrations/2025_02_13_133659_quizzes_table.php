<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // Category of the quiz (e.g., abstraction, polymorphism)
            $table->string('question'); // Quiz question
            $table->string('a'); // Option A
            $table->string('b'); // Option B
            $table->string('c'); // Option C
            $table->string('d'); // Option D
            $table->string('correct'); // Correct answer (e.g., 'a', 'b', 'c', 'd')
            $table->text('explanation'); // Explanation for the correct answer
            $table->text('code')->nullable(); // Optional code snippet
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};

