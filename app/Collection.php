<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    
    protected $fillable = ['user_id','amount', 'date','created_at','updated_at'];


      public function user(){
        return $this->belongsTo('App\User');
    }

  
}
