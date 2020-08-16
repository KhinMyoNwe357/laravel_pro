<?php

namespace App\Http\Controllers;

use App\Receipes;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {
    	$receipe = Receipes::paginate(9);
    	return view('publicviews.welcome', compact('receipe'));
    }

    public function show($id) {
    	$receipe = Receipes::find($id);
    	return view('publicviews.details', compact('receipe'));
    }
}
