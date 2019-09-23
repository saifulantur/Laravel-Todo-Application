@extends('layout/layout')
@section('content')
<div class="row mt-5">
	<div class="col-lg-6 offset-lg-3">
		<form action="{{ url('save/todo') }}/{{ $todos->id }}" method="post">
			@csrf
			<input  type="text" class="form-control input-lg text-center" value="{{ $todos->todo }}" name="todo" placeholder="Create new todo">
		</form>
	</div>
</div>
<hr>
</div>
@endsection