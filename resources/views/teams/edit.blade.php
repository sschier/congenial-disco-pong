@extends('layout_team')

@section('title', 'Edit Team')

@section('content')
	<h1 class = "title">{{  $team->name }} </h1>

	<form method="POST" action="/teams/{{ $team->id }}">

		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="field">
			<label class="label" for="name"> New Name</label>

			<div class="control">

				{{-- TODO: fix placeholder  --}}
				<input type="text" class = "input" name="name" required value="{{ $team->name }}">

			</div>
		</div>

		<div class="field">
			<div class="control">

				<button type="submit" class = "btn btn-success btn-lg">Submit</button>

			</div>
		</div>
	</form>

	<form method="POST" action="/teams/{{ $team->id }}">
		
		{{ method_field('DELETE') }}
		{{ csrf_field() }}

		<div class="field">
			<div class="control">

				<button type="submit" class = "btn btn-danger btn-lg">Delete Team</button>

			</div>
		</div>
	</form>
@endsection