<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['slug','title','description','name','price','unit','stock','imageUrl','order','status','subcategories_id'];

    public function subcategories(){
        return $this->belongsTo("App\Subcategories");
    }

    public function details(){
        return $this->hasMany('App\Details');
    }
}
