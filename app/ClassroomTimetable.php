<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomTimetable extends Model
{
    protected $fillable=['day','session_number','department','classroom_number','classgroup_name','professor_id'];
}
