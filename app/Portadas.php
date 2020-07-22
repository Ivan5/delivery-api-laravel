<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portadas extends Model
{
    //
    public $timestamps = false;

    protected $fillable = ['frase','link','imageUrl','orden'];
}
