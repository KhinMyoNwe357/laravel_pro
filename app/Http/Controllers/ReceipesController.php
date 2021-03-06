<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Events\ReceipesCreatedEvent;
use App\Http\Requests\ReceipesStoredRequest;
use App\Notifications\ReceipesStoredNotification;
use App\Receipes;
use App\User;
use Illuminate\Http\Request;

class ReceipesController extends Controller
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
        // $user = User::find(1);
        // $user->notify(new ReceipesStoredNotification($user));

        $data = Receipes::where('owner_id', auth()->id())->paginate(9);

        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::all();
        return view('create_receipe', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReceipesStoredRequest $request)
    {
        $validatedData = $request->validated();
        // $validatedData = request()->validate([
        //     "name" => 'required',
        //     "ingredients" => 'required',
        //     "category" => 'required',
        //     "receipeImage" => 'required|image'
        // ]);

        // upload image
        $image = date('YmdHis').".".request()->receipeImage->getClientOriginalExtension();
        request()->receipeImage->move(public_path('images'), $image);
        $receipe = Receipes::create($validatedData + ["owner_id" => auth()->id(), 'image' => $image ] );
        
        //event(new ReceipesCreatedEvent($receipe));

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
        // if ($receipe->owner_id != auth()->id()) {
        //     abort(400);
        // }
       $this->authorize('view', $receipe);
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
        $category = Categories::all();

        return view("edit", compact("receipe", "category"));
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
        $this->authorize('view',$receipe);

        $validatedData = request()->validate([
            "name" => 'required',
            "ingredients" => 'required',
            "category" => 'required',
            "receipeImage" => 'image'
        ]);
        
        if (request()->receipeImage) {
            $image = date('YmdHis') . "." . request()->receipeImage->getClientOriginalExtension();
            request()->receipeImage->move(public_path('images'), $image);
            $receipe->update($validatedData + ['image'=> $image]);
        }else {
            $receipe->update($validatedData);
        }

        session()->flash('message','Receipe data update successfully!');

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
        session()->flash('message','Receipe data delete successfully!');

        // $user = User::find(auth()->id());
        // $user->notify(new ReceipesStoredNotification($user));
        
        return redirect("receipe");
    }
}