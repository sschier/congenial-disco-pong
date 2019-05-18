@extends('layout_match')

@section('title', 'Bracket')

@section('content')
    <h1>Your Matches</h1>
    <ul>
      @foreach ($matches as $match)
        <li>
            <a href="/matches/{{  $match->id }}">{{ $match->matchName  }}</a> 
            {{-- <p>{{ $match->winningTeam->name }}</p>        --}}
        </li>
      @endforeach
    </ul>
@endsection
