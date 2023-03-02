<?php

namespace App\Actions;

use App\Models\Task;
use Illuminate\Http\JsonResponse;

class DeleteTaskAction
{
    public function execute(int $id): JsonResponse
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json([
            'status' => true,
            'message' => 'Task deleted',
        ])->setStatusCode('201', 'Task deleted');
    }
}
