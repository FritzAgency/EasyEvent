<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use View;


class HomeController extends Controller
{
    /*
	function that displays the homepage view.  
	
	*/  
	public function index(Request $request)
    {
        
        return View::make('public.index');

    }
}
