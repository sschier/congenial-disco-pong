@extends('layout_round')

@section('title', 'Rounds')

@section('content')

	<h1>
		Rounds
	</h1>

	@foreach($rounds as $round)

		<div class="container clearfix">

        	<div class="col" id="round {{ $round->id }}">

        		<ul>
	        		@foreach($round->matches as $match)
	        		
	        			<li>
	        				{{ $match->matchName }}
	        			</li>
	        		
		        	@endforeach
	        	</ul>

	@endforeach



@endsection