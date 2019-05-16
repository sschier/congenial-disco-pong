@extends('layout_team')

@section('title', 'Team Review')

@section('content')
	<h1 class = "title">{{  $team->name }} </h1>


	<a class="btn btn-success btn-lg" href="{{ $team->id }}/edit">Edit Team</a>

@endsection