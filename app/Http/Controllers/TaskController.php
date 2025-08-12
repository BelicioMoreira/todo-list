<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskResquest;
use Illuminate\Http\Request;
use App\Models\Task;
use GuzzleHttp\Promise\Create;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\Redis;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('todo.index', compact('tasks'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $tasks = Task::where(function($query) use ($search) {
            $query->where('title', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%");
        })
        ->get();

        return view('todo.index', compact('tasks', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskResquest $request)
    {
        // dd($request);
        $task = Task::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'due_date' => $request['due_date'],
        ]);

        if($task)
        {
            return redirect()->route('todo.index')->with('success', 'Tarefa cadastrada com sucessso!!');
        }
        else
        {
            return redirect()->route('todo.index')->with('error', 'Não foi possível cadastrar a tarefa!!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('todo.update', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskResquest $request, Task $task)
    {
        $update = $task->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'due_date' => $request['due_date'],
        ]);

        if($update)
        {
            return redirect()->route('todo.index')->with('success', 'Tarefa atualizada com sucessso!!');
        }
        else
        {
            return redirect()->route('todo.index')->with('error', 'Não foi possível atualizar a tarefa!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $deleted = $task->delete();

        if($deleted)
        {
            return redirect()->route('todo.index')->with('success', 'Tarefa removida com sucessso!!');
        }
        else
        {
            return redirect()->route('todo.index')->with('error', 'Não foi possível remover a tarefa!!');
        }
    }
}
