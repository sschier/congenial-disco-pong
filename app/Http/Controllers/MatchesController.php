<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\{Match, Team};

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $matches = Match::all();
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
    public function show(Match $match)

    {
        // dd(\App\Match::first()->winningTeam());
        $winner = Team::find($match->winnerId);

        return view('matches.show', compact('match'), compact('winner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Match $match)
    {

        // $match = \App\Match::findOrFail($id);

        return view('matches.edit', compact('match'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Match $match)


    {

        $match->update(request()->all());


        if(request('winnerId') == $match->team1Id){ 

            Team::find($match->team2Id)->update(['advance' => 0]);

        } else {

            Team::find($match->team1Id)->update(['advance' => 0]);

        }

        

        
        // $match = \App\Match::find($id);

        //dd(request()->all());

        // $match->team1Score = request('team1Score');
        // $match->team2Score = request('team2Score');
        // $match->winnerId = request('winnerId');

        // $match->save();

        
        // $teams::update('update teams set advance = 0 where id = ?', [ request('winnerId') ]);
       
        
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
