<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable=['code','subtotal','taxes','total','status','user_id'];

    public function user(){
        return $this->belongsTo("App\User");
    }
}
