<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    
    protected $fillable = ['extra_item_id','date', 'extra_amount'];
    
     public function extra_item_name(){
        return $this->belongsTo('App\ExtraItemModel');
    }
}
