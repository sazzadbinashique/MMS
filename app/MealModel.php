<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealModel extends Model
{
    /**
    *
    * @var string
    *
    */
    protected $table= 'Meal';

    /**
    *
    * @var array
    *
    */
    protected $fillable= ['user_id','Braekfast','Lanch','Dinner','date','created_at','updated_at'];
    
     public function user_name(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
