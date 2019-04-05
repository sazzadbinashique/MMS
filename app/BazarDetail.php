<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BazarDetail extends Model
{
       protected $fillable= ['user_id', 'bazar_menu_id', 'amount', 'date'];
    
    
    public function user_name(){
        return $this->belongsTo('App\User');
    }
    
    public function menu_name(){
        return $this->belongsTo('App\BazarMenu');
    }

}
