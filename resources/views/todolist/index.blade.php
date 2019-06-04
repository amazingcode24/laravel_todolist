@extends('layout')

@section('title')
	To Do List
@endsection

<a href="/todolist/create">Add a New Item</a> to the To Do List.

@section('content')
<ol type="1">
	@foreach ($items as $item)
	<li>{{ $item->title }}: {{ $item->description }} | Priority: {{ $item->priority }}</li>
	@endforeach
</ol>
@endsection