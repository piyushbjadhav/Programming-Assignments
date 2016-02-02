<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //New index fundction
    public function index(){
        return "Hello from Index Page";
    }

    public function greet($name){
        return "Hello from".$name;
    }

}
