@extends('admin_template')

@section('pagetitle','Tasks')

@section('maincontent')

<div class="row">
	<div class="col-md-3">
		<ul class="navbar-nav addbtn">
			<li class="nav-item">
				<form method="post" action="/admin/task">
					@csrf

					<div class="row">
						<div class="col-md-8">
							<input type="text" name="task" class="form-control">
						</div>

						<div class="col-md-4">
							<input class="btn btn-info" type="submit" value="+Add Task">
						</div>
					</div>
				</form>
			</li>
		</ul>  
	</div>
</div>
<br>


<div class="row">
	<div class="col-sm-12">

		<table class="table">
			<tr style="border-style: solid">
				<th>Task Name</th>
				<th>Action</th>	
			</tr>
			@foreach($tasks as $task)
			<tr>
				<td>{{$task->taskname}}</td>
				<td> 
					<div class="row">
						<div class="col-md-6">
							<a href="{{route('admin.task.edit',$task->id)}}"><button  class="btn btn-success"> Edit</button></a>
							<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deltask{{$task->id}}">Delete</button>
						</div>
					</div>
				</td>
			</tr>
			<div class="modal" id="deltask{{$task->id}}">
			    <div class="modal-dialog">
			    	<div class="modal-content">
			      	<form name="deleteTask" action="/admin/task/delete/{{$task->id}}" method="post">
			      		@csrf
			      		<!-- Modal body -->
				        <div class="modal-body">
				          Are you sure you want to delete?
				        </div>
				        <!-- Modal footer -->
				        <div class="modal-footer">
				          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
				          <button  class="btn btn-danger" >
				          	Yes, Delete
				          </button>
						</div>
			      	</form>
			      	</div>
			    </div>
			</div>
			@endforeach
			</table>											
		</div>
	</div>
@endsection