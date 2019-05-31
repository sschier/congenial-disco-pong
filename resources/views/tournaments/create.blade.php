@extends('layout_team')

@section('title', 'Tournaments')

@section('content')
	<h1>Create New Tournament</h1>

	<form method='POST' action='/tournaments/'>

		@csrf

		<label for="name">Name of Tournament</label>
		<input type="text" name="name" id="name" required>

		<label for="n_players">Number of Players</label>
		<select id="n_players" name="player_count">
			<option value=8>8</option>
			<option value=9>9</option>
			<option value=10>10</option>
			<option value=11>11</option>
			<option value=12>12</option>
		</select>


		<button type=submit>Submit</button>

		@if ($errors->any())

			<div class="notification is-danger">

				<ul>

					@foreach ($errors->all() as $error)

						<li>{{ $error }}</li>

					@endforeach

				</ul>
				
			</div>
			{{-- @include('errors') --}}

		@endif
		

	</form>




	<a href="/tournaments/">Go Back</a>
	



@endsection