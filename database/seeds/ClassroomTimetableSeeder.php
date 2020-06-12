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
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I1','classgroup_name'=>'Ds4.1','professor_id'=>23]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I2','classgroup_name'=>'Ds4.1','professor_id'=>15]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I3','classgroup_name'=>'Ds4.1','professor_id'=>7]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I4','classgroup_name'=>'Ds4.1','professor_id'=>8]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I5','classgroup_name'=>'Ds4.1','professor_id'=>9]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I6','classgroup_name'=>'Ds4.1','professor_id'=>10]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I7','classgroup_name'=>'Ds4.1','professor_id'=>11]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I8','classgroup_name'=>'Ds4.1','professor_id'=>5]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I9','classgroup_name'=>null,'professor_id'=>null]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I10','classgroup_name'=>null,'professor_id'=>null]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I11','classgroup_name'=>null,'professor_id'=>null]
        );
        ClassroomTimetable::create(
            ['day'=>'monday','session_number'=>1,'department'=>'Computer Science','classroom_number'=>'I12','classgroup_name'=>null,'professor_id'=>null]
        );
    }
}
