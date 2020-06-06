<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Seed
        User::create(
            ['name' => 'Admin', 'email' => 'admin@admin.admin', 'password' => Hash::make('adminadmin'),'type'=>'Admin','department'=>null],
        );

        //Supervisors Seeds
        User::create(
            ['name' => 'Superv 1', 'email' => 'superv1@s.s', 'password' => Hash::make('supervisor'),'type'=>'Supervisor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'Superv 2', 'email' => 'superv2@s.s', 'password' => Hash::make('supervisor'),'type'=>'Supervisor','department'=>'Mechanical & Electrical engineering'],
        );
        User::create(
            ['name' => 'Superv 3', 'email' => 'superv3@s.s', 'password' => Hash::make('supervisor'),'type'=>'Supervisor','department'=>'Management'],
        );

        //Professors seeds
        User::create(
            ['name' => 'I.Malloug', 'email' => 'IMalloug@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'S.Ezzedine', 'email' => 'SEzzedine@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'H.Boughammoura', 'email' => 'HBoughammoura@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'L.Ben.Rhouma', 'email' => 'LBenRhouma@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'A.Khalifa', 'email' => 'A.Khalifa@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'M.Jguirim', 'email' => 'MJguirim@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'R.Ben.Slama', 'email' => 'RBenSlama@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'S.Jallouli.Belaiba', 'email' => 'SJallouliBelaiba@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'M.Ben.Jazia', 'email' => 'MBenJazia@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'H.Boukthir', 'email' => 'HBoukthir@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'A.Tilouch', 'email' => 'ATilouch@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'M.Bjaoui', 'email' => 'MBjaoui@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'S.Turki.Hbaieb', 'email' => 'STurkiHbaieb@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'A.Kammoun', 'email' => 'AKammoun@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'N.Sassi', 'email' => 'NSassi@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'Y.Ben.Brahem.Ragoug', 'email' => 'YBenBrahemRagoug@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'T.Jalled', 'email' => 'TJalled@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'M.Abida', 'email' => 'MAbida@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'R.Ben.Elhaj.Said', 'email' => 'RBenElhajSaid@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'A.Ben.Ahmed', 'email' => 'ABenAhmed@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'I.Chebbi', 'email' => 'IChebbi@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'M.Ben.Abdeljalil', 'email' => 'MBenAbdeljalil@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'W.zaouali', 'email' => 'WZaouali@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'M.Khouja', 'email' => 'MKhouja@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'A.Jday', 'email' => 'AJday@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'N.Haj.Hamouda', 'email' => 'NHajHamouda@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'O.Ben.Lazreg', 'email' => 'OBenLazreg@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'W.Mekki', 'email' => 'WMekki@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'H.Ben.Rebah', 'email' => 'HBenRebah@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'A.Boussema', 'email' => 'ABoussema@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
        User::create(
            ['name' => 'A.Hechkel', 'email' => 'AHechkel@p.p', 'password' => Hash::make('professor'),'type'=>'Professor','department'=>'Computer Science'],
        );
    }
}
