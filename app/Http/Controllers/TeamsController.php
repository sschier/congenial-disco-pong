<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Team;



class TeamsController extends Controller
{
    public function index()

    {
    	$teams = Team::all();  //will probably only want teams for a given user

        // dd(app('foo'));

    	return view('teams.index', compact('teams')); //resources/views/teams/index.blade.php

    }

    public function store()

    {


        Team::create(request()->validate([

            'name' => 'required | min:3'

        ]));
            

// Line above does the same as these next three lines plus adds valdation inline.
    	// $team = new \App\Team();

    	// $team->name = request('name');

    	// $team->save();

    	return redirect('/teams');
    }

    public function show(Team $team)

    {
        // Use route model binding instead
        // $team = \App\Team::findOrFail($id);
        dump($team->matchesWon->first()->matchName);

        return view('teams.show', compact('team'));
    }

    public function edit(Team $team)
    {

        // $team = \App\Team::findOrFail($id);

        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update(Team $team)


    {
        request()->validate([

            'name' => 'required'

        ]);
        
        $team->update(request()->all());

        // dd(request()->all());

        // $team->name = request('name');

        // $team->save();
        return redirect('/teams/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        // \App\Team::find($id)->delete();
        $team->delete();

        return redirect('/teams/');
    }

    public function clear()
    {
        \App\Team::truncate();

        return redirect('/teams/');
    }
}
