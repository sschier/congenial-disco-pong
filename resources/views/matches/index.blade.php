@extends('layout_match')

@section('title', 'Bracket')

@section('content')
    <h1>Your Matches</h1>
    <ul>
      @foreach ($matches as $match)
        <li>
            <a href="/matches/{{  $match->id }}">{{ $match->matchName  }}</a>        
        </li>
      @endforeach
    </ul>
@endsection
