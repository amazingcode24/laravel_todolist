<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ToDoListController extends Controller
{
    public function index() {
    	$items = new Item();
    	return view('todolist.index')->withItems($items->all());
    }

    public function create() {
    	return view('todolist.create');
    }

     public function add() {

     	if( request()->title == '' ||
     		request()->description == '' ||
     		request()->priority == ''
     	){ return redirect('/todolist'); }

    	$item = new Item();
    	$item->title = request()->title;
    	$item->description = request()->description;
    	$item->priority = request()->priority;
    	$item->save();

    	return redirect('/todolist');
    }
}
