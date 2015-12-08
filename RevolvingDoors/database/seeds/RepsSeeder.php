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
        		Location::create(['state' =>'AL']),
                Location::create(['state' =>'AK']),
                Location::create(['state' =>'AZ']),
                Location::create(['state' =>'AR']),
                Location::create(['state' =>'CA']),
                Location::create(['state' =>'CO']),
                Location::create(['state' =>'CT']),
                Location::create(['state' =>'DE']),
                Location::create(['state' =>'DC']),
                Location::create(['state' =>'FL']),
                Location::create(['state' =>'GA']),
                Location::create(['state' =>'HI']),
                Location::create(['state' =>'ID']),
                Location::create(['state' =>'IL']),
                Location::create(['state' =>'IN']),
                Location::create(['state' =>'IA']),
                Location::create(['state' =>'KS']),
                Location::create(['state' =>'KY']),
                Location::create(['state' =>'LA']),
                Location::create(['state' =>'ME']),
                Location::create(['state' =>'MD']),
                Location::create(['state' =>'MA']),
                Location::create(['state' =>'MI']),
                Location::create(['state' =>'MN']),
                Location::create(['state' =>'MS']),
                Location::create(['state' =>'MO']),
                Location::create(['state' =>'MT']),
                Location::create(['state' =>'NE']),
                Location::create(['state' =>'NV']),
                Location::create(['state' =>'NH']),
                Location::create(['state' =>'NJ']),
                Location::create(['state' =>'NM']),
                Location::create(['state' =>'NY']),
                Location::create(['state' =>'NC']),
                Location::create(['state' =>'ND']),
                Location::create(['state' =>'OH']),
                Location::create(['state' =>'OK']),
                Location::create(['state' =>'OR']),
                Location::create(['state' =>'PA']),
                Location::create(['state' =>'RI']),
                Location::create(['state' =>'SC']),
                Location::create(['state' =>'SD']),
                Location::create(['state' =>'TN']),
                Location::create(['state' =>'TX']),
                Location::create(['state' =>'UT']),
                Location::create(['state' =>'VT']),
                Location::create(['state' =>'VA']),
                Location::create(['state' =>'WA']),
                Location::create(['state' =>'WV']),
                Location::create(['state' =>'WI']),
                Location::create(['state' =>'WY']),
        	);



        $reps = array();
        $name = ['state' =>'Tom', 'Harry', 'Hagrid', 'Albus'];
        $lastname = ['state' =>'Marvolo', 'Potter', 'SomeLastName', 'Dumbledore'];

        for ($i=0; $i < 10; $i++) { 
        	$reps[] = Rep::create(
            [
                'name' => $name[array_rand($name)].' '.$lastname[array_rand($lastname)], 
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat quam a lacus commodo maximus. Aliquam ac dignissim libero. Sed a odio velit. Aliquam nec enim risus. Proin dapibus magna eu fringilla porta. Etiam molestie justo et quam bibendum congue. Quisque ornare commodo ligula, ut placerat tortor auctor sit amet. Nunc fermentum porta lacus sit amet condimentum." , 
                'avatar' => 'dart_stw.jpg',
                'phone_number' => rand(10000000, 99999999),
            ]);
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
