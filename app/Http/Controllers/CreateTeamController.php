<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTeamController extends Controller
{
    public function index()
	{
		return view('createTeam');
	}
}
