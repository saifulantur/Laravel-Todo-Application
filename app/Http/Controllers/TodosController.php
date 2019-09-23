<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Session;

class TodosController extends Controller
{
    function index(){

    	$todos = Todo::all();
    	return view('todos', compact('todos'));
    }

    function store(Request $request){

    	$todo = new Todo;

    	$todo->todo = $request->todo;

    	$todo->save();

        Session::flash('success','Your todo is created.');

    	return back();
    }	

    function delete($id){
    	$todo = Todo::find($id);
    	$todo->delete();

        Session::flash('success','Your todo is deleted.');

    	return back();
    }

    function update($id){

    	$todos = Todo::find($id);
    	return view('update', compact('todos'));
    }

    function save(Request $request, $id){

    	$todo = Todo::find($id);
    	// print_r($todo->todo);
    	$todo ->todo = $request->todo;
    	$todo->save();

        Session::flash('success','Your todo is updated.');

    	return redirect()->route('todos');
    }

    function completed($id){
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();

        Session::flash('success','Your todo mark as completed.');

        return back();
    }
}
