<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    
    protected $fillable = ['extra_items_id','date', 'amount'];
    

    public function extra_items_name(){

    	return $this->belongsTo('App\ExtraItem');
    }
}
