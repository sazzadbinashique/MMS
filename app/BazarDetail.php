<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BazarDetail extends Model
{
    protected $fillable= ['user_id', 'bazar_menu_id', 'amount', 'date'];
    
    
    public function user(){

    	return $this->belongsTo('App\User');
    }
    
    public function bazarmenu(){
        return $this->belongsTo('App\BazarMenu');
    }

}
