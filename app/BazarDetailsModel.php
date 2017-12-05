<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BazarDetailsModel extends Model
{
     /**
    *
    * @var string
    *
    */
    protected $table= 'Bazar_details';

    /**
    *
    * @var array
    *
    */
    protected $fillable= ['user_id', 'Menu_id', 'Amount', 'Date', 'created_at','updated_at'];
    
    
    public function user_name(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function menu_name(){
        return $this->belongsTo('App\MenuModel', 'Menu_id', 'id');
    }
    
    
}
