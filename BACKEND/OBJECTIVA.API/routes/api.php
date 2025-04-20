<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LessonProgressController;
use App\Http\Controllers\QuizScoreController;
use App\Http\Controllers\QuizController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/check-email', [AuthController::class, 'checkEmail']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('jwt.auth')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::put('/update-profile', [AuthController::class, 'updateProfile']);
    Route::get('/users', [AuthController::class, 'getAllUsers']);
    // ... other protected routes
});

// ADMIN ROUTES
Route::middleware('jwt.auth')->group(function () {
    // Admin routes
    Route::get('/admin/users', [AuthController::class, 'getAllUsers']);
    Route::post('/admin/users', [AuthController::class, 'addUser']);
    Route::put('/admin/users/{id}', [AuthController::class, 'adminUpdateUser']);
    Route::delete('/admin/users/{id}', [AuthController::class, 'deleteUser']);
});

Route::middleware('jwt.auth')->group(function () {
    Route::post('/lesson-progress', [LessonProgressController::class, 'updateProgress']);
    Route::get('/lesson-progress', [LessonProgressController::class, 'getProgress']);
    Route::get('/lesson-progress-admin', [LessonProgressController::class, 'getProgressAdmin']);
});

Route::middleware('jwt.auth')->group(function () {
    Route::get('/quiz-scores', [QuizScoreController::class, 'getScores']);
    Route::post('/quiz-scores', [QuizScoreController::class, 'saveScore']);
    Route::get('/quiz-scores/{quizId}', [QuizScoreController::class, 'getCurrentScore']);
});

// 📌 Admin Routes (REQUIRES JWT AUTH)
Route::middleware('jwt.auth')->prefix('admin')->group(function () {
    Route::prefix('quizzes')->group(function () {
        Route::get('/{category}', [QuizController::class, 'getQuizzes']);  // Get quizzes by category
        Route::post('/{category}', [QuizController::class, 'addQuiz']);    // Add a new quiz
        Route::put('/{category}/{id}', [QuizController::class, 'updateQuiz']);  // Update quiz
        Route::delete('/{category}/{id}', [QuizController::class, 'deleteQuiz']);  // Delete quiz
    });
});

// 📌 Public Routes (DOES NOT REQUIRE JWT AUTH)
Route::prefix('quizzes')->group(function () {
    Route::get('/{category}', [QuizController::class, 'getQuizzes']);  // Fetch quizzes by category
});

// OTP Routes
Route::post('send-otp', [AuthController::class, 'sendOtp']);
Route::post('verify-otp', [AuthController::class, 'verifyOtp']);


// Route::middleware('jwt.auth')->group(function () {
//     Route::get('/admin/{type}-quizzes', [QuizController::class, 'getQuizzes']);
//     Route::post('/admin/{type}-quizzes', [QuizController::class, 'addQuiz']);
//     Route::put('/admin/{type}-quizzes/{id}', [QuizController::class, 'updateQuiz']);
//     Route::delete('/admin/{type}-quizzes/{id}', [QuizController::class, 'deleteQuiz']);
// });

// // LESSONS QUIZ ROUTES
// Route::get('abstraction-quizzes', [QuizController::class, 'getAbstractionQuizzes']);
// Route::get('polymorphism-quizzes', [QuizController::class, 'getPolymorphismQuizzes']);
// Route::get('inheritance-quizzes', [QuizController::class, 'getInheritanceQuizzes']);
// Route::get('encapsulation-quizzes', [QuizController::class, 'getEncapsulationQuizzes']);
// Route::get('introductionToJava-quizzes', [QuizController::class, 'getIntroductionToJavaQuizzes']);
// Route::get('introductionToOop-quizzes', [QuizController::class, 'getIntroductionToOopQuizzes']);