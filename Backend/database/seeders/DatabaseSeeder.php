<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed demo tasks for a great first impression on the kanban board
        \App\Models\Task::factory(4)->create(['status' => 'pending']);
        \App\Models\Task::factory(4)->create(['status' => 'in_progress']);
        \App\Models\Task::factory(4)->create(['status' => 'completed']);
    }
}
