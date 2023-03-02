<?php

namespace Database\Factories;

use App\Enums\TaskStatusEnum;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(30),
            'body' => fake()->text,
            'status' => TaskStatusEnum::STATUS_IN_PROGRESS,
        ];
    }
}
