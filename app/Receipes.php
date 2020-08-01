<?php

namespace App;

use App\Categories;
use Illuminate\Database\Eloquent\Model;

class Receipes extends Model
{
    //protected $table = 'receipe';

    protected $fillable = ['name', 'ingredients', 'category', 'owner_id'];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category');
    }
}
