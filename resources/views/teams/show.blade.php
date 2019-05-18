@extends('layout_team')

@section('title', 'Team Review')

@section('content')
	<h1 class = "title">{{  $team->name }} </h1>

{{-- 	@foreach ($team->matchesWon() as $wins)
		<ul>
			<li>$wins->matchName</li>
		</ul>
	@endforeach --}}


	<a class="btn btn-success btn-lg" href="{{ $team->id }}/edit">Edit Team</a>

@endsection