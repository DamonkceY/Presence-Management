<?php

namespace App\Http\Controllers;

use App\PresenceArchive;
use Illuminate\Http\Request;

class PresenceArchiveController extends Controller
{
    public function savePresence(Request $request){
        $presence = $request->all();
        foreach ($presence as $item) {
            $pa = new PresenceArchive;
            $pa->date = date("m/d/yy");
            $pa->day  = $item['day'];
            $pa->session = $item['session'];
            $pa->department = $item['department'];
            $pa->classroom_number = $item['classroom_number'];
            $pa->classgroup_name = $item['classgroup_name'];
            $pa->professor_id = $item['professor_id'];
            $pa->professor_name = $item['professor_name'];
            $pa->presence = $item['presence'];
            $pa->save();
        }

    }

}
