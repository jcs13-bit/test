<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            "id" => 1,
            "name" => "Inglaterra"
        ]);

        Country::create([
            "id" => 2,
            "name" => "Japon"
        ]);

        Country::create([
            "id" => 3,
            "name" => "India"
        ]);

        Country::create([
            "id" => 4,
            "name" => "Dinamarca"
        ]);
    }
}
