<?php

namespace App\Http\Controllers;

use App\Actions\DeleteTaskAction;
use App\Actions\CreateTaskAction;
use App\Actions\GetAllTasksAction;
use App\Actions\GetTaskAction;
use App\Actions\PatchTaskDataAction;
use App\Actions\PutTaskDataAction;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\PatchTaskRequest;
use App\Http\Requests\PutTaskRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class TasksController extends Controller
{
    public function showTasks(GetAllTasksAction $action): JsonResponse
    {
        return $action->execute();
    }

    public function showTask(int $id, GetTaskAction $action): JsonResponse
    {
        return $action->execute($id);
    }

    public function storeTask(CreateTaskAction $action, CreateTaskRequest $request): JsonResponse
    {
        return $action->execute($request->validated());
    }

    public function putTaskData(int $id, PutTaskDataAction $action, PutTaskRequest $request): JsonResponse
    {
        return $action->execute($id, $request->validated());
    }

    public function patchTaskData(int $id, PatchTaskDataAction $action, PatchTaskRequest $request): JsonResponse
    {
        return $action->execute($id, $request->validated());
    }

    public function deleteTask(int $id, DeleteTaskAction $action): JsonResponse
    {
        return $action->execute($id);
    }
}
