<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Match;

// Dedicated controller for handling and managing the state of a match

class CompletedMatchesController extends Controller
{
    // so far, filling this class with suggested functions from tutorial

    public function store(Match $match)
    {

    	$match->complete();

    	return back();

    }

    // This funtion is not actually needed
    public function destroy(Match $match)

    {

    	$match->incomplete();

    	return back();
    }
}
