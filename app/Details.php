<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    //
    protected $fillable = ['quantity','products_id','orders_id'];

    public function orders(){
        return $this->belongsTo('App\Orders');
    }

    public function products(){
        return $this->belongsTo('App\Products');
    }

}
