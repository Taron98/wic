<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'name' => 'Spain',
        		'code' => 'ES'
        	],
        	[
        		'name' => 'Russia',
        		'code' => 'RU'
        	],
        	[
        		'name' => 'Portugal',
        		'code' => 'PT'
        	],
        	[
        		'name' => 'United States',
        		'code' => 'US'
        	],
        	[
        		'name' => 'Italy',
        		'code' => 'IT'
			],
			[
        		'name' => 'Germany',
        		'code' => 'DE'
        	],
        	
        	[
        		'name' => 'France',
        		'code' => 'FR'
        	],
        	
        	[
        		'name' => 'Croatia',
        		'code' => 'HR'
			],
			[
        		'name' => 'Great Britain',
        		'code' => 'GB'
        	],
        	[
        		'name' => 'Belgium',
        		'code' => 'BE'
        	]
        ];
        for($i = 0; $i < count($data); $i++) {
        	if(!Country::where('name', $data[$i]['name'])->exists()){
        		Country::create($data[$i]);
        	}
        }
    }
}
