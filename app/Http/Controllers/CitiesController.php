<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController
{
    public function getCities($country_id)
    {
        return response(City::where('country_id', $country_id)->get());
    }
}
