<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Brand;

class Product extends Model
{

    protected $hidden = ['created_at', 'updated_at']; //What you don't wanna show while retrieving
    protected $visible = ['id', 'title', 'price']; //Only what you wanna show while retrieving
    protected $fillable = ['title', 'price']; //Only what you wanna insert while inserting new data
    protected $attributes = ['price'=>100]; //Setting up default value if no value given while inserting new data

    function brand()  {
        return $this->belongsTo(Brand::class);
    }
}
