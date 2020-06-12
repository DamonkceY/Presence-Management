<?php

use Illuminate\Database\Seeder;
use App\ClassGroup;
class ClassgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classgroup::create(
            ['department'=>'Computer Science','name'=>'Ds4.1']
        );
        Classgroup::create(
            ['department'=>'Computer Science','name'=>'Ti2.1']
        );
        Classgroup::create(
            ['department'=>'Computer Science','name'=>'Ti2.2']
        );
        Classgroup::create(
            ['department'=>'Computer Science','name'=>'Ti2.3']
        );
    }
}
