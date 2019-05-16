<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class TeamsController extends Controller
{
    public function index()

    {
    	$teams = \App\Team::all();  //will probably only want teams for a given user

    	return view('teams.index', compact('teams')); //resources/views/teams/index.blade.php

    }

    public function store()

    {
    	$team = new \App\Team();

    	$team->name = request('name');

    	$team->save();

    	return redirect('/teams');
    }

    public function show($id)

    {
        $team = \App\Team::findOrFail($id);

        return view('teams.show', compact('team'));
    }

    public function edit($id)
    {

        $team = \App\Team::findOrFail($id);

        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)


    {
        
        $team = \App\Team::findOrFail($id);

        // dd(request()->all());

        $team->name = request('name');

        $team->save();
        return redirect('/teams/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Team::find($id)->delete();

        return redirect('/teams/');
    }

    public function clear()
    {
        \App\Team::truncate();

        return redirect('/teams/');
    }
}
