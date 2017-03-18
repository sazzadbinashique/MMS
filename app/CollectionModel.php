<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
