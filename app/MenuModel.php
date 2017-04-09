<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    /**
    *
    * @var string
    *
    */
    protected $table= 'Menu';

    /**
    *
    * @var array
    *
    */
    protected $fillable= ['menu_item','created_at','updated_at'];
}
