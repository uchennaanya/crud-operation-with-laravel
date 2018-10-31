@extends('layouts.app')


@section('content')
<div class="row">
	<div class="col-md-12">
		
		<h2>Create User</h2>
		<form method="post" action="/record">
			
			{{  csrf_field() }}
			
			<div class="form-group">
				<div class="form-group">
					<div class="col-md-8">
						<label for="name" id="name">Names</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="name" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label for="phone" id="Phonee">Phone</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="phone" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label for="state" id="state">State</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="state" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-default"> Create </button>
				</div>

			</div>
		</form>
	</div>
</div>


All Records:

<table class="table table-stripped">

	<tr>
		
		<th>Names</th><th>Phone</th><th>State</th><th colspan="2">Actions</th>
		
	</tr>
	@foreach($cruds as $crud)
	<tr>
	
		<td>{{  $crud->name }} </td>
		<td>{{  $crud->phone }} </td>
		<td>{{  $crud->state }} </td>
		<td colspan="2">
			<a href = "{{ route('create.delete', ['id' => $crud->id ])}}" class="btn btn-danger btn-xs">Delete</a>  <a href = "{{ route('update.save', ['id' => $crud->id ])}}" class="btn btn-info btn-xs">Edith</a> </td>
	
	</tr>
	@endforeach
</table>



@stop