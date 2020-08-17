<?php

namespace App;

use App\Receipes;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $fillable = ['name', 'description', 'user_id'];
    //protected $table = 'category';
     public function receipes()
    {
        return $this->hasMany(Receipes::calss);
    }

    protected static function boot()
    {
    	Parent::boot();
    	static::created(function($category){
    		session()->flash('message', 'Category has been created Successfully!');
    	});

    	static::updated(function($category){
    		session()->flash('message', 'Category has been updated Successfully!');
    	});

    	static::deleted(function($category){
    		session()->flash('deleted', 'Category has been deleted Successfully!');
    	});
    }
}
