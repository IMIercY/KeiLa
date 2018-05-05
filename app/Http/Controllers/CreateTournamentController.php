<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateTournament;
use App\Http\Controllers\Input;
use DB;
use Illuminate\Support\Facades\Auth;
use Storage;

class CreateTournamentController extends Controller
{
    public function insert_createTournament (Request $reg)
	{
		if($reg->file('image') == null )
		{
			$material=$reg->input('materialPic');

//		query tournament to show on home page
			$tournament = DB::table('tournaments')->join('sport_type','tournaments.sport_id','=','sport_type.id')->get();
		//Insert Tournament into database
		$Create = new CreateTournament;
		$Create->profile_image= $material;
		$Create->name 	      = $reg->tournamentName;
		$Create->address      = $reg->address;
		$Create->team_number  = $reg->team_number;
		$Create->team_member  = $reg->team_member;
		$Create->sport_id     = $reg->ball;
		$Create->save();
			if(Auth::guard()->check()){
				$user = Auth::user();
//				return view('home')->with('user', $user);
				//		update role
		$role=DB::table('roles')->where(['user_id'=>$user->id])->update(['tournament_owner'=>1]);
				//		Insert into table 'Possession'
		$possession=DB::table('users_possession')->insert(['user_id'=>$user->id,'tournament_id'=>$Create->id]);
				return view('home')->with('user', $user)->with('Tournaments', $tournament);
			}
		}
		//////////////////////////////////////////////////////////////////////////
		$image=$reg->file('image');
		$fileName=$image->getClientOriginalName();
		Storage::put('/uploads/' . $fileName, file_get_contents($reg->file('image')->getRealPath()));	

//		query tournament to show on home page
		$tournament = DB::table('tournaments')->join('sport_type','tournaments.sport_id','=','sport_type.id')->get();
		//Insert Tournament into database
		$Create = new CreateTournament;
		$Create->profile_image= $fileName;
		$Create->name 	      = $reg->tournamentName;
		$Create->address      = $reg->address;
		$Create->team_number  = $reg->team_number;
		$Create->team_member  = $reg->team_member;
		$Create->sport_id     = $reg->ball;
		$Create->save();
		if(Auth::guard()->check()){
			$user = Auth::user();
//			return view('home')->with('user', $user);
			//		update role
		$role=DB::table('roles')->where(['user_id'=>$user->id])->update(['tournament_owner'=>1]);
			//		Insert into table 'Possession'
		$possession=DB::table('users_possession')->insert(['user_id'=>$user->id,'tournament_id'=>$Create->id]);
			return view('home')->with('user', $user)->with('Tournaments', $tournament);
		}
	}
//	public function getTour()
//	{
//		$tournament = DB::table('tournaments')->get();
//		return view('displayTour',['Tournaments'=>$tournament]);
//	}
}
