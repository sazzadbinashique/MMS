<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthModel extends Model
{
    /**
    *
    * @var string
    *
    */
    protected $table= 'Month';

    /**
    *
    * @var array
    *
    */
    protected $fillable= ['Month','Year','created_at','updated_at'];
    
    
}
