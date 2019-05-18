@extends('layout_team')

@section('title', 'Teams')

@section('content')
	<h1>Setup Teams</h1>

      <div class="container clearfix">

        <div class="col primary" id="add-team">

          <h2> Enter the teams  </h2>


          <form method="POST" action="/teams"> {{-- This post action to /teams calls teams.store --}}

          	@csrf


            <input name="name" required ></input>

            <button type=submit>Submit</button>

            @if ($errors->any())

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            @endif

          </form>

        </div>

          
        <div class="col secondary" id="teams">

          <h2> Your Teams</h2>

          <ul>

              @foreach ($teams as $team)

                <li>

                  <a href="/teams/{{ $team->id }}"> {{ $team->name }} </a>    

                </li>

              @endforeach

          </ul>


          <form method="POST" action="/teams">

            @method('DELETE')

            @csrf


            <button type=submit>Clear</button>

          </form>

        </div>


        <div class="col tertiary">

          <form method="POST" action="/matches"> {{-- This post action to /matches calls matches.store --}}

            @csrf


            <button class="btn btn-danger btn-lg" type=submit>Submit</button>

          </form>

          <form method="POST" action="/matches"> {{-- This post (delete) action to /matches calls matches.clear --}}

            @method('DELETE')

            @csrf


            <button class="btn btn-danger btn-lg" type=submit>Clear Previous Matches</button>

          </form>

      </div>

    </div>

@endsection