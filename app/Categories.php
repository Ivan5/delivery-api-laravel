<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = ['slug','title','description','name','imageUrl','viewers','order','portada'];
}
