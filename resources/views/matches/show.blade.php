@extends('layout_match')

@section('title', 'Match Review')

@section('content')
	<h1 class = "title">{{  $match->matchName }} </h1>

	@if ($match->winnerId < 0)
	    <div id="playMatch">
	    	<h2>This match has not started</h2>

			<a class="btn btn-success btn-lg" href="{{ $match->id }}/edit">Start Match</a>

		</div>

	@else

		<h2>Match results:</h2>

		<h3>{{ $teams[($match->winnerId)-1]->name }} - WINNER!!</h3>


		<ul>
			<li>
				{{ $match->team1Name }} : {{ $match->team1Score }}
				
			</li>
			<li>
				{{ $match->team2Name }} : {{ $match->team2Score }}
				
			</li>
				
		</ul>

	@endif
@endsection