<?php
namespace App\Http\Controllers;

use App\User;
use DB;
use App\CreateTournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
	    $tournament = DB::table('tournaments')
			->select('tournaments.id','tournaments.name','tournaments.profile_image','tournaments.address','tournaments.team_number','tournaments.team_member','tournaments.sport_id','sport_type.type')
			->join('sport_type','tournaments.sport_id','=','sport_type.id')
			->get();
        if(Auth::guard()->check())
        {
            $user = Auth::user();
//            return view('home',['Tournaments'=>$tournament],['user'=>$user]);
			return view('home')->with('Tournaments', $tournament)->with('user',$user);
        }
        return redirect()->route('login');
    }
	public function getTour($TiD)
	{
		$tournament = DB::table('tournaments')->join('sport_type','tournaments.sport_id','=','sport_type.id')->where('tournaments.id', $TiD)->get();
		$teams = DB::table('teams')
			->get();
		$teamsScore = DB::table('teams')->where('score', '!=' , ''  )->get();
//		$users = DB::table('users')->where('col', '=', '')->orWhereNull('col')->get();
//		$teamsScore2 = DB::table('teams')->whereIn('score',[ 2 , 3 ] )->get();
		$teamsScore2 = DB::table('teams')->where('score', 2 )->orWhere('score', 3)->get();
		if(Auth::guard()->check())
        {
            $user = Auth::user();
//            return view('home',['Tournaments'=>$tournament],['user'=>$user]);
//			return view('home')->with('Tournaments', $tournament)->with('user',$user);
			return view('displayTour')->with('user',$user)->with('T' , $tournament)->with('team', $teams)->with('teamS', $teamsScore)->with('teamS2', $teamsScore2);
        }
        return redirect()->route('login');
        
	}
	
	
	
	
	
	
}