<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    protected $fillable = ['slug','title','description','name','imageUrl','viewers','order','categories_id'];

    public function categories(){
        return $this->belongsTo('App\Categories');
    }

    public function products(){
        return $this->hasMany("App\Products");
    }
}
