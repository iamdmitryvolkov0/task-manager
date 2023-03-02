<?php

namespace App\Actions;

use App\Models\Task;
use Illuminate\Http\JsonResponse;

class CreateTaskAction
{
    public function execute(array $fields): JsonResponse
    {
        $task = Task::create([
            'title' => $fields['title'],
            'body' => $fields['body'],
        ]);

        return response()->json([
            'status' => true,
            'article' => $task,
        ])->setStatusCode('201', 'Task created');
    }
}
