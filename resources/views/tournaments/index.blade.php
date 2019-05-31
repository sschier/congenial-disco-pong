@extends('layout_team')

@section('title', 'Tournaments')

@section('content')
	<h1>Your Tournaments</h1>


	<ul>
		
		@foreach ($tournaments as $tournament)

			<li>
				<a href="/tournaments/{{ $tournament->id }}"> Tournament {{ $tournament->name }} </a>
			</li>

		@endforeach

	</ul>

	<a href="/tournaments/create">Create New Tournament</a>
	



@endsection

