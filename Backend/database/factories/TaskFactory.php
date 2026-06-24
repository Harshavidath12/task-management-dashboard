<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'title'       => $this->faker->sentence(rand(3, 7), false),
            'description' => $this->faker->optional(0.7)->paragraph(),
            'status'      => $this->faker->randomElement(Task::STATUSES),
        ];
    }
}
