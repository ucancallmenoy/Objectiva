<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Quiz;


class QuizController extends Controller{
    public function getQuizzes($category = null): JsonResponse
    {
        $query = Quiz::query();
        
        if ($category) {
            $query->where('category', $category);
        }
        
        return response()->json($query->get());
    }

    public function addQuiz(Request $request, $category): JsonResponse
{
    // Validate required fields
    $request->validate([
        'question' => 'required|string',
        'a' => 'required|string',
        'b' => 'required|string',
        'c' => 'required|string',
        'd' => 'required|string',
        'correct' => 'required|string'
    ]);

    // Include the category from the URL
    $quizData = $request->all();
    $quizData['category'] = $category;

    // Create quiz using the single Quiz model
    $quiz = Quiz::create($quizData);

    return response()->json($quiz, 201);
}

    public function updateQuiz(Request $request, $category, $id): JsonResponse
    {
        $quiz = Quiz::where('id', $id)->where('category', $category)->first();
        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }
        
        $quiz->update($request->all());
        return response()->json($quiz);
    }

    // public function deleteQuiz($id): JsonResponse
    public function deleteQuiz(Request $request): JsonResponse
    {
        $quiz = Quiz::where('id', $request->id)
        ->where('category', $request->category)
        ->first();        
        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }
        
        $quiz->delete();
        return response()->json(['message' => 'Quiz deleted successfully']);
    }
}
