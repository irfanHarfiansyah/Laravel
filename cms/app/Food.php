<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['title','content','featured_image'];
    public $table = "foods";
    
}
