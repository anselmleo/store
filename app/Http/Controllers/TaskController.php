<?php

namespace App\Http\Controllers;


Use App\Task;
use App\User;
use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Http\Requests\TaskFormValidator;


class TaskController extends Controller
{
    // protected $taskService;

    // public function __construct(TaskService $taskService)
    // {
    //     $this->taskService = $taskService;
    // }
    
    // public function addTask(Request $request, TaskFormValidator $validator)
    // {
    //     $formData = [
    //         'title' => $request->get('title')
    //     ];

    //     $this->taskService->make($formData);
    //     return redirect()->back()->with('message', 'Title successfully added to db');

    // }

    public function testMutator() 
    {
        $task = new Task;
        $task->title = 'Join the challenge - Code For Change';
        $task->user_id = 3;
        $task->save();

        return 123;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // function show() 
    // {
    //     $tasks = Task::all();
    //     return view('task.showtasks', compact('tasks'));
    // }

    // function get($taskid)
    // {
    //     $task = Task::find($taskid);
    //     $title = 'detail';
    //     return view('task.taskdetail', compact('task', 'title'));
    // }

    function create()
    {
        $title = "Add Task";
        return view('task.addtask', compact('title'));
    }

    // function addTask(Request $request, TaskFormValidator $taskFormValidator) 
    // {
    //     $task = new Task;
    //     $task->title = request('title');
    //     $task->title = $request->get('title');
    //     $task->save();
        
    //     Task::create([
    //         'title' => request('title')
    //     ]);

    //     return redirect()->back()->with('message', 'Title successfully added to db');


    // }
}
