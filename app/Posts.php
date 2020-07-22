<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $fillable = ['slug','title','description','name','imageUrl','viewers','order','categories_id'];

    public function categories(){
        return $this->belongsTo("App\Categories");
    }
}
