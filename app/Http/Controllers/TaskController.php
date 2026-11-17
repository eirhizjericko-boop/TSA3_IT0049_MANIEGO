<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    public function welcome()
    {
        $todayTasks = Task::whereDate('task_date', Carbon::today())
            ->orderBy('title')
            ->get();

        return view('tasks.welcome', compact('todayTasks'));
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date')->orderBy('title')->get();

        return view('tasks.index', compact('tasks'));
    }
}
