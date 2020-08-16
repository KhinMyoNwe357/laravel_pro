<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Categories::where('user_id', auth()->id())->get();
        return view('category.home', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = request()->validate([
            "name" => 'required',
            "description" => 'required',
        ]);

        $category = Categories::create($validatedData + ["user_id" => auth()->id()]);
        
        //event(new ReceipesCreatedEvent($receipe));

        return redirect("category");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        // if ($category->user_id != auth()->id()) {
        //     abort(403);
        // }
        $this->authorize('view', $category);
        return view("category.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        return view("category.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Categories $category)
    {
        $validatedData = request()->validate([
            "name" => 'required',
            "description" => 'required'
        ]);

        $category->update($validatedData);

        return redirect("category");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        
        return redirect("category");
    }
}
