@extends('admin_template')

@section('pagetitle','Edit Task')

@section('maincontent')

<form method="post" action="/admin/task/update">
	@csrf
	<div class="field">
		<label class="label" for="title">Task</label>
		<div class="control">
			<input type="hidden" name="id" value="{{$task->id}}"/>
			<input type="text" class="input" name="task" placeholder="Task" value="{{ $task->taskname }}"/>
			<button type="submit" name="submitButton">Update</button>
			
		</div>		
	</div>
</form>


@endsection