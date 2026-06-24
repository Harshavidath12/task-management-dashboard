<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TaskController extends Controller
{
    /**
     * Return all tasks, optionally filtered by search query.
     * GET /api/tasks?search=keyword
     */
    public function index(Request $request): JsonResponse
    {
        $query = Task::query()->oldest();

        if ($search = $request->query('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $tasks = $query->get();

        return response()->json([
            'success' => true,
            'data'    => $tasks,
        ]);
    }

    /**
     * Create a new task.
     * POST /api/tasks
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'status'      => ['sometimes', Rule::in(Task::STATUSES)],
        ]);

        $task = Task::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Task created successfully.',
            'data'    => $task,
        ], 201);
    }

    /**
     * Show a single task.
     * GET /api/tasks/{task}
     */
    public function show(Task $task): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data'    => $task,
        ]);
    }

    /**
     * Update an existing task (full or partial update).
     * PUT /api/tasks/{task}
     */
    public function update(Request $request, Task $task): JsonResponse
    {
        $validated = $request->validate([
            'title'       => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['sometimes', 'nullable', 'string'],
            'status'      => ['sometimes', 'required', Rule::in(Task::STATUSES)],
        ]);

        $task->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Task updated successfully.',
            'data'    => $task->fresh(),
        ]);
    }

    /**
     * Delete a task.
     * DELETE /api/tasks/{task}
     */
    public function destroy(Task $task): JsonResponse
    {
        $task->delete();

        return response()->json([
            'success' => true,
            'message' => 'Task deleted successfully.',
        ]);
    }
}
