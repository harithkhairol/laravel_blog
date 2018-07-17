@extends('layouts.master')

@section('content')

<div class="col-md-8">
	
<h1>Log In</h1>

<hr>

<form method="POST" action="/login">

	{{ csrf_field() }}

	<div class="form-group">
		
		<label for="email">Email Address</label>
		<input type="email" class="form-control" name="email" id="email">


	</div>

		<div class="form-group">
		
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" id="password">


	</div>

			<div class="form-group">
		
		<button type="submit" class="btn btn-primary">Log In</button>


	</div>

		@include('layouts.error')


		</div>




</form>

</div>

@endsection