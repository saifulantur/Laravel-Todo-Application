@extends('layout/layout')
@section('content')
<div class="row mt-3">
	<div class="col-lg-6 offset-lg-3 mb-2">
		<form action="/create/todo" method="post">
			@csrf
			<input type="text" class="form-control input-lg text-center" name="todo" placeholder="Create new todo">
		</form>
	</div>
</div>
<hr>
<div class="row">
	<div class="title m-b-md col-lg-12">
		@forelse($todos  as $todo)
		<p class="text-center">
			{{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">&#10005;</a>
		<a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
		@if(!$todo->completed)
		<a href="{{ route('todo.completed', ['id'=> $todo->id]) }}" class="btn btn-primary btn-sm text-white">Mark as completed</a>
		@else
		<span class="text-success">Completed!</span>
		@endif
	</p>
	<hr>
	@empty
	<h6 class="text-center text-danger">No data available</h6>
	@endforelse
</div>
</div>
@endsection