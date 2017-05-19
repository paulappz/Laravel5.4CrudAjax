<?php

use Illuminate\Database\Seeder;
use App\Role;


class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::insert([
    ['name' => 'Admin', 'description' => 'This is admin'],
    ['name' => 'Director', 'description' => 'This is Director'],
    ['name' => 'Manager', 'description' => 'This is Manager'],
    ['name' => 'CEO', 'description' => 'This is CEO'],
    
]);
        //
    }
}