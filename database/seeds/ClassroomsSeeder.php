<?php

use App\ClassRoom;
use Illuminate\Database\Seeder;

class ClassroomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Computer Science classrooms;
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I1']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I2']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I3']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I4']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I5']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I6']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I7']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I8']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I9']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I10']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I11']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'I12']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'Labo.LI1']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'Labo.LI2']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'Labo.LI1BIS']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'Labo.LI2BIS']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','name'=>'Labo.FC']
        );


        //Mechanical & Electrical engineering classrooms;
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M1']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M2']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M3']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M4']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M5']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M6']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M7']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M8']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M9']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M10']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M11']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'M12']
        );

        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'Labo.LM1']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'Labo.LM2']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'Labo.LM1BIS']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','name'=>'Labo.LM2BIS']
        );

        //Management classrooms;
        ClassRoom::create(
            ['department'=>'Management','name'=>'G1']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G2']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G3']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G4']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G5']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G6']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G7']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G8']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G9']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G10']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G11']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'G12']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'Labo.LG1']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'Labo.LG2']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'Labo.LG1BIS']
        );
        ClassRoom::create(
            ['department'=>'Management','name'=>'Labo.LG2BIS']
        );

    }
}
