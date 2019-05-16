@extends('layout_match')

@section('title', 'Play Match')

@section('content')
	<h1 class = "title">{{  $match->matchName }} in play </h1>

	<form method="POST" action="/matches/{{ $match->id }}">  {{-- calls matches.update --}}

		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="field">
			<label class="label" for="team1Score"> {{ $match->team1Name }} score</label>

			<div class="control">

				<input type="number" class = "input" name="team1Score" placeholder="0">

			</div>
		</div>

		<div class="field">
			<label class="label" for="team2Score"> {{ $match->team2Name }} score</label>

			<div class="control">

				<input type="number" class = "input" name="team2Score" placeholder="0">

			</div>
		</div>

		<div class="field">
			Select the Winner
			<input type="radio" name="winnerId" id="winnerTeam1" value={{ $match->team1Id }}>
			<label for="winnerTeam1">{{ $match->team1Name }}</label>
			<input type="radio" name="winnerId" id="winnerTeam2" value={{ $match->team2Id }}>
			<label for="winnerTeam2">{{ $match->team2Name }}</label>
		</div>

		<div class="field">
			<div class="control">

				<button type="submit" class = "btn btn-danger btn-lg">Submit Final Scores</button>

			</div>
		</div>
	</form>
@endsection