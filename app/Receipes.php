<?php

namespace App;

use App\Categories;
use App\Events\ReceipesCreatedEvent;
use App\Mail\ReceipeStored;
use Illuminate\Database\Eloquent\Model;

class Receipes extends Model
{
    //protected $table = 'receipe';

    protected $fillable = ['name', 'ingredients', 'category', 'owner_id'];

    public $dispatchesEvents = [
        'created' => ReceipesCreatedEvent::class,
    ];

    protected static function boot() {
    	parent::boot();

    	static::created(function($receipe){
    		session()->flash('message','Receipe has created successfully');

    	});
    }


    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category');
    }
}
