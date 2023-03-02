<?php

namespace App\Actions;

use App\Models\Task;
use Illuminate\Http\JsonResponse;

class PatchTaskDataAction
{
    public function execute($id, array $fields): JsonResponse
    {
        $task = task::findOrFail($id);

        $task->title = $fields['title'] ?? $task->title;
        $task->body = $fields['body'] ?? $task ->body;

        $task->save();

        return response()->json([
            'status' => true,
            'message' => 'Task updated',
        ])->setStatusCode('201', 'Task partly updated');
    }
}
