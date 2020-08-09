<?php

namespace App;

use App\Categories;
use App\Mail\ReceipeStored;
use Illuminate\Database\Eloquent\Model;

class Receipes extends Model
{
    //protected $table = 'receipe';

    protected $fillable = ['name', 'ingredients', 'category', 'owner_id'];

    protected static function boot() {
    	parent::boot();

    	static::created(function($receipe){
    		session()->flash('message','Receipe has created successfully');

        	\Mail::to('khinmyonwe1995@gmail.com')->send(new ReceipeStored($receipe));

    	});
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category');
    }
}
