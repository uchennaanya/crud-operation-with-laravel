@extends('layouts.app')


@section('content')

	<div class="row">
	<div class="col-md-12">
		
		<h2>Update user here</h2>
		<form method="post" action="{{ route('update.save', ['id' => $crud->id ])  }}">
			
			{{  csrf_field() }}
			
			<div class="form-group">
				<div class="form-group">
					<div class="col-md-8">
						<label for="name" id="name">Names</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="name" class="form-control" value="{{  $crud->name }}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label for="phone" id="Phonee">Phone</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="phone" class="form-control" value="{{  $crud->phone }}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label for="state" id="state">State</label>
					</div>
					<div class="col-md-6">
						<input type="text" name="state" class="form-control" value="{{  $crud->state }}">
					</div>
				</div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-default"> Update </button>
				</div>

			</div>
		</form>
	</div>
</div>

@stop