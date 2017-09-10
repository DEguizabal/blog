<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name' => 'javier elias','correo'=>'javier@gmail.com','password'=>bcrypt('javier'),'type'=>'admin']);
        DB::table('users')->insert(['name' => 'elias','email'=>'elias@gmail.com','password'=>bcrypt('elias'),'type'=>'member']);

        //factory(App\User::class, 10)->create();

    }
}   
