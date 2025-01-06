<?php

namespace App\Http\Controllers;
use App\Models\TacheModel;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function index(){ 
        $taches = taches::all(); 
        return view('Taches.index',compact('taches')); 
    }
}
//     public function create() {
//          return view('tasks.create'); 
//     }

//     /*** Store a newly created resource in storage.
//      */
//     public function store(Request $request) { 
//         $request->validate([ 
//             'title' => 'required|max:255', 
//             'description' => 'nullable', 
//             'completed' => 'boolean', ]); 
//             Task::create($request->all()); 
//         return redirect()->route('tasks.index'); }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Task $task) {
//          return view('tasks.show', compact('task')); } 
         
//     public function edit(Task $task) { 
//         return view('tasks.edit', compact('task')); } 
        
//     public function update(Request $request, Task $task) {
//          $request->validate([ 
//             'title' => 'required|max:255', 
//             'description' => 'nullable', 
//             'completed' => 'boolean', ]); 
//             $task->update($request->all()); 
//             return redirect()->route('tasks.index'); } 
            
//     public function destroy(Task $task) { 
//         $task->delete(); return redirect()->route('tasks.index'); }
// }
