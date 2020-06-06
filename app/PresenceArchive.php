<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresenceArchive extends Model
{
    protected $fillable=['date','day','session','department','classroom_number','professor_id','professor_name','classgroup_name','presence'];
    //
}
