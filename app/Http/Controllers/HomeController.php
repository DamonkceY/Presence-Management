<?php

namespace App\Http\Controllers;

use App\ClassRoom;
use App\User;
use App\ClassroomTimetable;
use App\PresenceArchive;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->type=='Supervisor') {
            $department = Auth::user()->department;
            $mytime = date("H")+1;
            $date = date("m/d/yy");

            switch ($mytime) {
                case 8:
                case 9:
                    $session = 1;
                    break;
                case 10:
                case 11:
                    $session = 2;
                    break;
                case 12:
                case 13:
                    $session = 3;
                    break;
                case 14:
                case 15:
                    $session = 4;
                    break;
                case 16:
                case 17:
                    $session = 5;
                    break;
                case 18:
                    $session = 6;
                    break;
                default:
                    $session = 'NONE';
                    break;
            };
            $day = strtolower(date("l"));
            $timetable = ClassroomTimetable::where('day','monday')->where('session_number',1)->where('department',$department)->get();
            foreach ($timetable as $item) {
                $user = User::find($item->professor_id);
                if (empty($user)) {
                    $item->setAttribute('professor_name',null);
                }else{
                    $item->setAttribute('professor_name',$user->name);
                }
            }

            $presencetab = PresenceArchive::where('date',$date)->where('session',1)->get();



            return view('home')->with('timetable',$timetable)->with('presencetab',$presencetab);
        }else
            return view('home');

    }
}
