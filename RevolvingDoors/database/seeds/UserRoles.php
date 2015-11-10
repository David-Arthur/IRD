<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use App\User;

class UserRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $architectRole = Role::create([
            'name' => 'Architect',
            'slug' => 'architect',
            'description' => 'Architect', // optional
            'level' => 1, // optional, set to 1 by default
        ]);
        
        $salesRepRole = Role::create([
            'name' => 'Sales Rep',
            'slug' => 'sales.reps',
            'description' => '', // optional
            'level' => 1, // optional, set to 1 by default
        ]);
        
        $buyerRole = Role::create([
            'name' => 'Buyers',
            'slug' => 'buyers',
            'description' => '', // optional
            'level' => 1, // optional, set to 1 by default
        ]);
        
        $adminRole = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => '', // optional
            'level' => 1, // optional, set to 1 by default
        ]);
        
        $date = new DateTime;
        
        //CREATES DUMMY USERS
        $user = User::create([
            'name'  => 'Dummy User',
            'email' => 'dummy_user@server.com',
            'password' => bcrypt('secret'),
            'birthday' => $date->setDate(1999, 1, 1),   
        ]);
        
        $user->attachRole($architectRole);  
    }
}
