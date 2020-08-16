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
}
