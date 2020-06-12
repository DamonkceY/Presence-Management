<?php

namespace App\Http\Controllers;

use App\ClassRoom;
use App\ClassGroup;
use App\ClassroomTimetable;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function supervisor(){
        $supervisor = User::where('type','Supervisor')->get();
        return view('users.administration.ManageSupervisor')->with('supervisor',$supervisor);
    }

    public function professor(){
        $professor = User::where('type','Professor')->get();
        return view('users.administration.ManageProfessor')->with('professor',$professor);
    }

    public function classroom(){
        $classes=ClassRoom::all();
        return view('users.administration.ManageClassroom')->with('classes',$classes);
    }

    public function timetable(){
        $timetable = ClassroomTimetable::all();
        $professor = User::where('type','Professor')->get();
        $classroom = ClassRoom::all();
        $classgroup = ClassGroup::all();
        return view('users.administration.ManageTimetable')->with('classgroup',$classgroup)
                                                           ->with('classroom',$classroom)
                                                           ->with('timetable',$timetable)
                                                           ->with('professor',$professor);
    }

    public function saveTimetable(Request $req){
        $tt = new ClassroomTimetable;
        $tt->day = $req->get('day');
        $tt->session_number = $req->get('session_number');
        $tt->department = $req->get('department');
        $tt->classroom_number = $req->get('classroom_number');
        $tt->classgroup_name = $req->get('classgroup_name');
        $tt->professor_id = $req->get('professor_id');
        $tt->professor_name = $req->get('professor_name');
        $tt->save();
    }

    public function addUser(Request $req){
        $user = new User;
        $user->name = $req->get('name');
        $user->email = $req->get('email');
        $user->type = $req->get('type');
        $user->password = Hash::make($req->get('password'));
        $user->department = $req->get('department');
        $user->save();
    }

    public function editUser(Request $req){
        $user = User::findOrFail($req->get('id'));
        if (!empty($user)) {
            $data=[
                'name'=>$req->input('name'),
                'department'=>$req->input('department'),
                'email'=>$req->input('email'),
                'type'=>$req->input('type'),
            ];
            $user->update($data);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
    }
}
