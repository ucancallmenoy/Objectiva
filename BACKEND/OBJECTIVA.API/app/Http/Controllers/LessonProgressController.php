<?php

namespace App\Http\Controllers;

use App\Models\LessonProgress;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class LessonProgressController extends Controller
{
    public function updateProgress(Request $request)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            
            $request->validate([
                'lesson_id' => 'required|string',
                'completed' => 'required|boolean',
                'last_section' => 'nullable|integer'
            ]);

            $data = [
                'completed' => $request->completed
            ];

            // Only add last_section if it's provided
            if ($request->has('last_section')) {
                $data['last_section'] = $request->last_section;
            }

            $progress = LessonProgress::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'lesson_id' => $request->lesson_id
                ],
                $data
            );

            return response()->json([
                'success' => true,
                'data' => $progress
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function getProgress(Request $request)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            
            $progress = LessonProgress::where('user_id', $user->id)
                ->get();
            
            $formattedProgress = [];
            
            foreach ($progress as $item) {
                $formattedProgress[$item->lesson_id] = [
                    'completed' => $item->completed,
                    'last_section' => $item->last_section
                ];
            }

            return response()->json([
                'success' => true,
                'data' => $formattedProgress
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function getProgressAdmin(Request $request)
{
    try {
        $user = JWTAuth::parseToken()->authenticate();
        $userId = $request->input('user_id');
        
        // Get user-specific progress
        $userProgress = LessonProgress::where('user_id', $userId)
            ->get()
            ->mapWithKeys(function ($item) {
                return [$item->lesson_id => [
                    'completed' => (bool)$item->completed,
                    'last_section' => $item->last_section,
                    'updated_at' => $item->updated_at ? $item->updated_at->toISOString() : null
                ]];
            })
            ->toArray();

        // Get date filter parameter if provided
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        
        // Start building query for overall statistics
        $query = LessonProgress::where('completed', true);
        
        // Apply date filter if provided
        if ($fromDate && $toDate) {
            $query->whereBetween('updated_at', [$fromDate, $toDate]);
        } else if ($fromDate) {
            $query->where('updated_at', '>=', $fromDate);
        } else if ($toDate) {
            $query->where('updated_at', '<=', $toDate);
        }
        
        // Get counts grouped by lesson_id
        $progress = $query->select('lesson_id')
            ->groupBy('lesson_id')
            ->selectRaw('count(*) as completion_count')
            ->pluck('completion_count', 'lesson_id')
            ->toArray();
            
        // Get the latest completion dates for each lesson
        $completionDates = LessonProgress::where('completed', true)
            ->select('lesson_id')
            ->selectRaw('MAX(updated_at) as latest_completion')
            ->groupBy('lesson_id')
            ->pluck('latest_completion', 'lesson_id')
            ->toArray();

        return response()->json([
            'success' => true,
            'data' => [
                'progress' => $userProgress,
                'counts' => $progress,
                'dates' => $completionDates
            ]
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}
}