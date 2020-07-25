<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipes extends Model
{
    //protected $table = 'receipe';

    protected $fillable = ['name', 'ingredients', 'category'];
}
