<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function fetchTasksPerUser() 
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('BASECAMP_API_BEARER_TOKEN'),
            'User-Agent' => env('BASECAMP_APP_NAME') . ' (' . env('BASECAMP_USER_AGENT_EMAIL') . ')'
        ])->get(env('BASECAMP_PROJECTS_ENDPOINT'));

        return $response->json();
    }

    public function fetchAssigneesPerProject()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('BASECAMP_API_BEARER_TOKEN'),
            'User-Agent' => env('BASECAMP_APP_NAME') . ' (' . env('BASECAMP_USER_AGENT_EMAIL') . ')'
        ])->get(env('BASECAMP_ASSIGNEES_ENDPOINT'));

        return $response->json();
    }
}