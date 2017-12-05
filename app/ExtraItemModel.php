<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraItemModel extends Model
{
    /**
     *
     * @var type 
     */
    protected $table='Extra_item';
    
    /**
     *
     * @var type 
     */
    
    protected $fillable= ['extra_item','created_at','updated_at'];
}
