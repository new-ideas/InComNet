<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->truncate();

        // load country json
        $string    	= 	file_get_contents(storage_path()."/json/countries.json");
        $countries 	= 	json_decode($string);

        foreach($countries as $country){
            DB::table('country')->insert([
                'country_code' => $country->code,
                'country_name' => $country->name,
                'dial_code' => $country->dial_code,
            ]);
        }

    }
}
