<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory('App\User', 10)->create();
        // $this->call(UsersTableSeeder::class);
           factory('App\User')->create([
        
        'role_id'=> 3,
        'name' => 'micheal jackson',
        'email' => str_random(10).'@yahoo.com',
        'password' => bcrypt('micheal'),
        'remember_token' => str_random(10),
           
        ]);
    }
}
