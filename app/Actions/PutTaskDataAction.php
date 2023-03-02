<?php

namespace App\Actions;

use App\Models\Task;
use Illuminate\Http\JsonResponse;

class PutTaskDataAction
{
    public function execute($id, array $fields): JsonResponse
    {
        $task = Task::findOrFail($id);

        $task->title = $fields['title'];
        $task->body = $fields['body'];

        $task->save();

        return response()->json([
            'status' => true,
            'message' => 'Task updated',
        ])->setStatusCode('201', 'Task fully updated');
    }
}
