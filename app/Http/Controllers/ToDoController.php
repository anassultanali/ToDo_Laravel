<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDo;

class ToDoController extends Controller
{
    function index() {
        
        $tasks = ToDo::all();
        
        return view('welcome' , ['tasks' => $tasks]);
    }
    
    function store() {
        //get data
        $title = request()->title;
        $description = request()->description;

        //send the data to DB
        ToDo::create([
            'title' => $title,
            'description' => $description
        ]);

        return redirect('/' );
    }

    function update(ToDo $task) {
        
        

        $task->update(['isDon' => true ]);


        return redirect('/');
    }

    function destroy(ToDo $task) {
        
        $task->delete();

        return redirect('/');
    }

}
