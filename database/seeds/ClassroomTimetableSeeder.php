<?php

use Illuminate\Database\Seeder;
use App\ClassroomTimetable;
class ClassroomTimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Monday session 1
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>1,'classgroup_name'=>'Ds4.1','professor_id'=>5]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>2,'classgroup_name'=>'Ds4.1','professor_id'=>6]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>3,'classgroup_name'=>'Ds4.1','professor_id'=>7]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>4,'classgroup_name'=>'Ds4.1','professor_id'=>8]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>5,'classgroup_name'=>'Ds4.1','professor_id'=>9]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>6,'classgroup_name'=>'Ds4.1','professor_id'=>10]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>7,'classgroup_name'=>'Ds4.1','professor_id'=>11]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>8,'classgroup_name'=>'Ds4.1','professor_id'=>12]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>9,'classgroup_name'=>null,'professor_id'=>null]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>10,'classgroup_name'=>null,'professor_id'=>null]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>11,'classgroup_name'=>null,'professor_id'=>null]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>12,'classgroup_name'=>null,'professor_id'=>null]
        );
    }
}
