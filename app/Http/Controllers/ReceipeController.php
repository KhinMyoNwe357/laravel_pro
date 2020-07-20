<?php

namespace App\Http\Controllers;

use App\Receipes;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function index() {
    	$data = Receipes::all();
    	
    	return view('home', compact('data'));
    }
}
