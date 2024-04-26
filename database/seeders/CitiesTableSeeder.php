<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            "name" => "Londres",
            "country_id" => 1,
            "location" => '51.51133764609167,-0.07687941443823298',
            "moneda" => 'GBP'
        ]);

        City::create([
            "name" => "Manchester",
            "country_id" => 1,
            "location" => '53.47957307537813,-2.240974720930846',
            "moneda" => 'GBP'
        ]);

        City::create([
            "name" => "Hiroshima",
            "country_id" => 2,
            "location" => '34.39069111280118,132.4654426097753',
            "moneda" => 'JPY'
        ]);

        City::create([
            "name" => "Kioto",
            "country_id" => 2,
            "location" => '34.98171087211759,135.77722140277305',
            "moneda" => 'JPY'
        ]);

        City::create([
            "name" => "Nueva Delhi",
            "country_id" => 3,
            "location" => '28.615972095732765,77.21790806057432',
            "moneda" => 'INR'
        ]);

        City::create([
            "name" => "Bombay",
            "country_id" => 3,
            "location" => '19.06900985188554,72.87971517613302',
            "moneda" => 'INR'
        ]);

        City::create([
            "name" => "Copenhague",
            "country_id" => 4,
            "location" => '55.67743490489913,12.580088693794494',
            "moneda" => 'DKK'
        ]);

        City::create([
            "name" => "Aarhus",
            "country_id" => 4,
            "location" => '56.16221213512718,10.204631478653214',
            "moneda" => 'DKK'
        ]);
    }
}
