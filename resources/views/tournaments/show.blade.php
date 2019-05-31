@extends('layout_team')

@section('title', 'Tournaments')

@section('content')

	<h1 class = "title">{{ $tournament->name }}</h1>

	<div class="container">

		<div class="row">

			<div class="col">

				<p>This tournament is accepting {{ $tournament->player_count }} players </p>

			</div>

			<div class="col">

				@foreach ($tournament->teams as $team)

					<li>{{ $team->name }}</li>

				@endforeach

			</div>
		</div>
	</div>
	


	<div class="container">

		<div class="col">

			<a href="/tournaments/{{ $tournament->id }}/edit">Edit Tournament</a>

		</div>

		<div class="col">

			<a href="/tournaments/">Go Back</a>
			
		</div>

	</div>




@endsection
