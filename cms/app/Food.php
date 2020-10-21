<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $table = "foods";
    protected $fillable = ['title','content','featured_image'];
}
