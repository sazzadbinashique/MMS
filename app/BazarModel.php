<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BazarModel extends Model
{
    /**
    *
    * @var string
    *
    */
    protected $table= 'Bazar';

    /**
    *
    * @var array
    *
    */
    protected $fillable= ['user_id','Month_id','Expected_date','created_at','updated_at'];
    
    public function user_name(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function month_name(){
        return $this->belongsTo('App\MonthModel', 'Month_id', 'id');
    }
}
