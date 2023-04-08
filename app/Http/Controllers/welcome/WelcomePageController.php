<?php

namespace App\Http\Controllers\welcome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class WelcomePageController extends Controller
{
    public function index()
    {
        return view('welcome.welcome');
    }
}
