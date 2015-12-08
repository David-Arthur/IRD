<?php

use Illuminate\Database\Seeder;
use App\Rep;
use App\Location;

class RepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = array( 
        		Location::create(['state' => 'IN']),
        		Location::create(['state' => 'IL']),
        		Location::create(['state' => 'OH']),
        		Location::create(['state' => 'KN']),
        	);

        $reps = array();
        $name = ['Voldemort', 'Harry', 'Hagrid', 'Dumbledore'];
        $lastname = ['Babuínos', 'Bobocas', 'Babuciando', 'em Bando'];

        for ($i=0; $i < 10; $i++) { 
        	$reps[] = Rep::create(['name' => $name[array_rand($name)].' '.$lastname[array_rand($lastname)], 'description' => str_random(50), 'avatar' => 'dart_stw.jpg']);
        }
        

        foreach ($reps as $rep) {
            for ($i=0; $i < 5; $i++) { 
                $location = $locations[array_rand($locations)];
                $rep->locations()->attach($location->id);   
            }
        }

        $newrep = Rep::create(['name' => 'Test Rep', 'description' => 'This is just a test', 'avatar' => 'dart_stw.jpg']);
        
        for ($i=0; $i < 5; $i++) { 
                $location = $locations[array_rand($locations)];
                $newrep->locations()->attach($location->id);   
        }
    }
}
