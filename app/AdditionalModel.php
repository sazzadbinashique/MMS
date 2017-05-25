<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalModel extends Model
{
    /**
     *
     * @var string 
     */
    protected $table= "Additional";
    
    /**
     *
     * @var array
     */
    protected $fillable = ['extra_item_id','date', 'extra_amount','created_at','updated_at'];
    
     public function extra_item_name(){
        return $this->belongsTo('App\ExtraItemModel', 'extra_item_id', 'id');
    }
}
