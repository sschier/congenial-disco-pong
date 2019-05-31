@extends('layout_team')

@section('content')

	<form method='POST' action='/tournaments/{{ $tournament->id }}'>

		{{-- {{ method_field('PATCH') }} --}}
		@method('PATCH')
		@csrf

		{{-- If tournament has started, I will want to show two separate edit forms --}}

		<div class="form-group">

			<label for="name">Edit Tournament Name</label>

			<input type="text" class="{{ $errors->has('name') ? 'border border-danger' : ''  }}" name="name" id="name" required value="{{ $tournament->name }}"> {{-- required is a standard client side (front-end) browser validation Even is no errors, can still access $errors object--}}

		</div>

		<div class="form-group">

			<label for="n_players">Edit Number of Players</label>
			<select class="form-control" id="n_players" name="player_count">
				<option value=8>8</option>
				<option value=9>9</option>
				<option value=10>10</option>
				<option value=11>11</option>
				<option value=12>12</option>
			</select>

		</div>

		<div class="form-group">

			<button type=submit>Submit</button>

			@include('errors')

		</div>
		

	</form>

	<div class="container">

		@foreach ($tournament->teams as $team)

			<div>
				<form method="POST" action="/tournaments/{{ $tournament->id }}/teams/{{ $team->id }}">
				{{-- <form method="POST" action="/teams/{{ $team->id }}"> --}}
					@method('PATCH')
					@csrf

					<label class="checkbox {{ !$team->advance ? 'is-dead' : '' }}" for="die">
						<input type="checkbox" name="die" onChange="this.form.submit()". {{ !$team->advance ? 'checked' : '' }}>
						{{ $team->name }}
					</label>
				</form>

			</div>

		@endforeach

	</div>

	<form method='POST' action='/tournaments/{{ $tournament->id }}'>


		@method('DELETE')
		@csrf

		<div class="form-group">
			
			<button type="submit" class = "btn btn-danger btn-lg">Delete Tournament</button>

		</div>

	</form>

	{{-- Here we want to be able to add new teams --}}


	<div class="form-group">

		<form method='POST' action="/tournaments/{{ $tournament->id }}/teams">

			@csrf
			
			<label class="label" for="name">New Team</label>

			<input type="text" name="name" placeholder="New Team" required>

			<button type="submit" class="btn btn-outline-info">Add Team</button>

		</form>


	</div>


@endsection