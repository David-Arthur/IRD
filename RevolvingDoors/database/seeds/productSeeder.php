<?php

use Illuminate\Database\Seeder;
use App\ProductType;
use App\Product;
use App\ProductImage;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $securityType = ProductType::create([
            'name' => 'Security',
            'slug' => 'security',
            'description' =>    '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et quam commodo, pulvinar felis sed, dictum leo. Donec justo quam, cursus at iaculis sed, vulputate eget ex. Duis tincidunt purus ac turpis gravida sodales sed at sem. Curabitur laoreet lectus at nibh tincidunt rhoncus. Vestibulum non felis vel orci tempus interdum. Ut tempor auctor massa, in mattis orci finibus in. Sed sollicitudin feugiat nisl, suscipit bibendum felis cursus accumsan. Nulla sed nisi nec purus fermentum hendrerit sit amet a dolor. Phasellus congue facilisis sem, ac scelerisque massa. Nulla eu elit non lacus pretium vestibulum. In lorem dui, rhoncus eget facilisis eget, vestibulum eu dolor. Curabitur quis ligula feugiat, imperdiet lacus et, fringilla leo. Cras aliquet faucibus augue.</p>'.
                                '<p>Phasellus turpis ipsum, porttitor sit amet lacinia et, mattis in arcu. Nullam pellentesque tempor leo, vel varius justo fringilla ac. Vestibulum nec euismod sem, id euismod enim. Etiam nec mattis orci, et blandit elit. Aenean bibendum purus non odio ornare, eget tempus turpis accumsan. Donec lorem magna, facilisis quis dignissim sit amet, vehicula quis neque. Donec sem sem, venenatis quis rutrum id, maximus at lectus. Phasellus molestie dignissim quam, id hendrerit mi volutpat a. Etiam venenatis vulputate ex nec egestas. Vestibulum scelerisque interdum metus, vel ullamcorper leo ultrices id. Nulla tincidunt condimentum eros eget placerat. Etiam tellus tortor, molestie hendrerit pulvinar non, aliquam eget nisl. Sed pulvinar ultricies metus ut ullamcorper.</p>',
        ]);

        $phoenixDoor = Product::create([
        	'name' => 'Phoenix',
        	'type_id' => $securityType->id,
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum lacus, accumsan finibus elit. Integer malesuada urna nec bibendum consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam at tortor lorem. Morbi congue dolor at eros maximus laoreet. Maecenas dictum posuere sodales. Etiam',
        ]);

        $CyclopsDoor = Product::create([
            'name' => 'Cyclops',
            'type_id' => $securityType->id,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum lacus, accumsan finibus elit. Integer malesuada urna nec bibendum consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam at tortor lorem. Morbi congue dolor at eros maximus laoreet. Maecenas dictum posuere sodales. Etiam',
        ]);

        $WolverineDoor = Product::create([
            'name' => 'Wolverine',
            'type_id' => $securityType->id,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum lacus, accumsan finibus elit. Integer malesuada urna nec bibendum consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam at tortor lorem. Morbi congue dolor at eros maximus laoreet. Maecenas dictum posuere sodales. Etiam',
        ]);

        $phoenixImage = ProductImage::create([
        	'file_name' => 'images/door.jpg',
        	'product_id' => $phoenixDoor->id,
        ]);
    }
}
