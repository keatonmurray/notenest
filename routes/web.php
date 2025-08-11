<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/get-user-tasks', [TasksController::class, 'fetchTasksPerUser']);
Route::get('/get-assignees', [TasksController::class, 'fetchAssigneesPerProject']);
Route::get('/get-todos', [TasksController::class, 'fetchAssignedTodos']);
Route::get('/get-todo-lists', [TasksController::class, 'fetchTodoLists']);