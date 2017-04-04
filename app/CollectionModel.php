<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class CollectionModel extends Model
{
    /**
     *
     * @var string 
     */
    protected $table= "Collection";
    /**
     *
     * @var array
     */
    
    protected $fillable = ['user_id','amount', 'date','created_at','updated_at'];


    public function user_name(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
  
}
