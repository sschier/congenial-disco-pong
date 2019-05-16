<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//This controller should only control pages that don't use data, like pages of rules and stuff


class PagesController extends Controller
{
    //controller for home
    public function home()

    {
    	return view('welcome');
    }



    //controller for setup
    public function setup()

    {
    	return view('setup');
    }

    //controller for bracket
    public function bracket()

    {
    	return view('bracket');
    }

    //controller for play
    public function play()

    {
    	return view('play');
    }
}
