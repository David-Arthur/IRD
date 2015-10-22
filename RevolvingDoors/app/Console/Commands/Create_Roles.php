<?php 

use Bican\Roles\Models\Role;

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

$user = User::create(['name' => 'Test Name', 'email' => 'user@test.com', 'password' => bcrypt(123456)]);

?>