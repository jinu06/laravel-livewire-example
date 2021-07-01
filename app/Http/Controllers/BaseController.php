<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function contactForm(){
        return view('contact');
    }
}
