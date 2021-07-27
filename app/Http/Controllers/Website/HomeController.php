<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Age;
use App\Models\Height;
use App\Models\Weight;

class HomeController extends Controller
{
    public function index()
    {
    	$ages = Age::whereStatus(true)->get();
    	$heights = Height::whereStatus(true)->get();
    	$weights = Weight::whereStatus(true)->get();

    	return view('website.index',compact('ages','heights','weights'));
    }
}
