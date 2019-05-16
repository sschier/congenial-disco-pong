<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = \App\Match::all();
        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // Matches will not be created by the user, but rather by the Tournament class, 
        // so this function needs to be changed
        $helper = new Helper;
        $helper->setupRound();
        $matches = $helper->round;

        foreach ($matches as $myMatch) {
        

            $match = new \App\Match();

            $match->matchName = $myMatch->matchName;

            $match->team1Id = $myMatch->team1Id;

            $match->team1Name = $myMatch->team1Name;

            $match->team2Id = $myMatch->team2Id;

            $match->team2Name = $myMatch->team2Name;

            $match->save();
        }
        return redirect('/matches');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $teams = \App\Team::all();
        $match = \App\Match::findOrFail($id);
        //$winner = \App\Team::where('id', $match->winnerId);

        return view('matches.show', compact('match'), compact('teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //This will accept the match id and take you to a page where the match can
        //be edited (or played actually).  There can be a place where the score is entered
        //There will need to be a function that then decides who won and updates that as well.
        //My buttons on the tournament page can just redirect to each match edit 

        $match = \App\Match::findOrFail($id);

        return view('matches.edit', compact('match'));
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
        $teams = \App\Team::all();
        $match = \App\Match::find($id);

        //dd(request()->all());

        $match->team1Score = request('team1Score');
        $match->team2Score = request('team2Score');
        $match->winnerId = request('winnerId');

        $match->save();

        
        \App\Team::update('update teams set advance = 0 where id = ?', [ request('winnerId') ]);
       
        
        return redirect('/matches/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function clear()
    {
        \App\Match::truncate();

        return redirect('/teams/');
    }

}
