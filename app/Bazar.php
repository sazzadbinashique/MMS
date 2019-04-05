<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bazar extends Model
{
    

    protected $fillable= ['user_id','month_id','expected_date'];
    
    public function user_name(){
        return $this->belongsTo('App\User');
    }
    
    public function month_name(){
        return $this->belongsTo('App\Month');
    }
}
