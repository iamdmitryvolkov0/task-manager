<?php

namespace App\Actions;

use App\Models\Task;
use Illuminate\Http\JsonResponse;

class GetAllTasksAction
{
    public function execute(): JsonResponse
    {
         $tasks = Task::all();

        return response()->json([
            'status' => true,
            'articles' => $tasks,
        ]);
    }
}
