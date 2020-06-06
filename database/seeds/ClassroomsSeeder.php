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
            ['department'=>'Computer Science','number'=>1,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>2,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>3,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>4,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>5,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>6,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>7,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>8,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>9,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>10,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>11,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>12,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>null,'name'=>'LI1']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>null,'name'=>'LI2']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>null,'name'=>'LI1BIS']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>null,'name'=>'LI2BIS']
        );
        ClassRoom::create(
            ['department'=>'Computer Science','number'=>null,'name'=>'FC']
        );


        //Mechanical & Electrical engineering classrooms;
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>1,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>2,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>3,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>4,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>5,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>6,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>7,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>8,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>9,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>10,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>11,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>12,'name'=>null]
        );

        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>null,'name'=>'LM1']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>null,'name'=>'LM2']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>null,'name'=>'LM1BIS']
        );
        ClassRoom::create(
            ['department'=>'Mechanical & Electrical engineering','number'=>null,'name'=>'LM2BIS']
        );

        //Management classrooms;
        ClassRoom::create(
            ['department'=>'Management','number'=>1,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>2,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>3,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>4,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>5,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>6,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>7,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>8,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>9,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>10,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>11,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>12,'name'=>null]
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>null,'name'=>'LG1']
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>null,'name'=>'LG2']
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>null,'name'=>'LG1BIS']
        );
        ClassRoom::create(
            ['department'=>'Management','number'=>null,'name'=>'LG2BIS']
        );

    }
}
