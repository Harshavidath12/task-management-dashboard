<?php

use App\Http\Controllers\Api\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — Task Management Dashboard
|--------------------------------------------------------------------------
|
| All routes are prefixed with /api automatically by Laravel.
| Available endpoints:
|   GET    /api/tasks          - List all tasks (supports ?search=)
|   POST   /api/tasks          - Create a new task
|   GET    /api/tasks/{id}     - Get a single task
|   PUT    /api/tasks/{id}     - Update a task
|   DELETE /api/tasks/{id}     - Delete a task
|
*/

Route::apiResource('tasks', TaskController::class);
