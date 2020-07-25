<?php

namespace App\Http\Controllers;

use App\Receipes;
use Illuminate\Http\Request;

class ReceipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Receipes::all();
        
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_receipe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedData = request()->validate([
            "name" => 'required',
            "ingredients" => 'required',
            "category" => 'required'
        ]);

        Receipes::create($validatedData);

        return redirect("receipe");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipes  $receipes
     * @return \Illuminate\Http\Response
     */
    public function show(Receipes $receipe)
    {
       return view("show", compact("receipe"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipes  $receipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipes $receipe)
    {
        return view("edit", compact("receipe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipes  $receipes
     * @return \Illuminate\Http\Response
     */
    public function update(Receipes $receipe)
    {
        $validatedData = request()->validate([
            "name" => 'required',
            "ingredients" => 'required',
            "category" => 'required'
        ]);

        $receipe->update($validatedData);

        return redirect("receipe");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipes  $receipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipes $receipe)
    {
        $receipe->delete();
        return redirect("receipe");
    }
}