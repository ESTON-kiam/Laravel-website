<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    // Method for the home page
    public function home()
    {
        return view('home'); // Make sure you have a home.blade.php in resources/views
    }

    // Method for the African Lion page
    public function lion()
    {
        return view('lion'); // Make sure you have a lion.blade.php in resources/views
    }

    // Method for the Rhino page
    public function rhino()
    {
        return view('rhino'); // Make sure you have a rhino.blade.php in resources/views
    }

    // Method for the Antelope page
    public function antelope()
    {
        return view('antelope'); // Make sure you have an antelope.blade.php in resources/views
    }

    // Method for the Tiger page
    public function tiger()
    {
        return view('tiger'); // Make sure you have a tiger.blade.php in resources/views
    }

    public function login()
    {
        return view('login');
    }

}
