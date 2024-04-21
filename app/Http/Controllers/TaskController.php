<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Statistics;
use Illuminate\Http\Request;
use App\Http\Resources\TaskResource;
use App\Http\Requests\TaskCreateRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(10);
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create()
    {
        $admins = User::where('is_admin', true)->get();
        $users = User::where('is_admin', false)->get();
        return view('tasks.create', compact('admins', 'users'));
    }

    public function store(TaskCreateRequest $request)
    {
        // save task
        Task::create($request->validated());
        // save statistics
        $statistics = Statistics::firstOrNew(['user_id' => $request->input('assigned_to_id')]);
        $statistics->task_count = Task::where('assigned_to_id', $request->input('assigned_to_id'))->count();
        $statistics->save();
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }
}
