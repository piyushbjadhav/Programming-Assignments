<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WeatherController extends Controller
{
    //GetWeather Function
    public function getWeather($location){
        return $location;
    }
}
