<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class portfolioController extends Controller
{
    public function getPortfolio()
    {
    	return view('Portfolio.portfolio'); 
    }
}
