<?php

namespace App\Http\Controllers;

use App\myTasks;
use Illuminate\Http\Request;

class MyTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // Get all an return to user.
    public function index()
    {
        return myTasks::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     // Validate input then create a new task
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'completed' => 'required|boolean',
            'pinned' => 'required|boolean',
            'standard_order' => 'required|integer',
            'pinned_order' => 'required|integer',
            'description' => 'nullable|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);

        $task = myTasks::create($data);

        // Return a success response
        return response($task, 201);
    }

    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\myTasks  $myTasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, myTasks $task)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'completed' => 'required|boolean',
            'pinned' => 'required|boolean',
            'standard_order' => 'required|integer',
        ]);
        
        // Update the task with the new data
        $task->update($data);

        // Return a success response
        return response($task, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\myTasks  $myTasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(myTasks $task)
    {
        $task->delete();

        return response('Deleted the task!', 200);
    }
}
