@extends('layout')

@section('title')
	Add New To Do Item to the List
@endsection


@section('content')
	<h2>Please use the Form below...</h2>
	<form method="POST" action="/todolist/create">
		{{ csrf_field() }}

		<div>
			<input type="text" name="title" placeholder="Item title">
		</div>

		<div>
			<textarea name="description" placeholder="Item description"></textarea>
		</div>

		<div>
			<select name="priority">
				<option>Urgent</option>
				<option>Normal</option>
				<option>Back Burner</option>
			</select>
		</div>

		<div>
			<button type="submit">Add Item to the List</button>
		</div>
	</form>
@endsection