<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesControllers extends Controller
{
    public function about()
    	{
    		return view (pages.about);
    	}

     public function index()
    	{
    		return view('pages.index');
    	}
    	 public function services()
    	{
    		return('pages.services');
    	}
}
