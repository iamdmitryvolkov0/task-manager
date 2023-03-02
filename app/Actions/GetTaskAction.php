<?php

namespace App\Actions;

use App\Models\Task;
use Illuminate\Http\JsonResponse;

class GetTaskAction
{
    public function execute(int $id): JsonResponse
    {
        $task = Task::findOrFail($id);

        return response()->json($task, 200);
    }
}
