<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    
    protected $fillable= ['user_id','braekfast','lanch','dinner','date'];
    
    /* public function user_name(){
        return $this->belongsTo('App\User');
    }*/
    public function user(){

        return $this->belongsTo('App\User');
    }
}
