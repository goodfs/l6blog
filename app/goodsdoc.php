<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class goodsdoc extends Model
{
    //
    protected $connection='oracle';
    protected  $table="goodsdoc";
    protected  $primaryKey="goodsid";
    //protected  $$

    public function goodsattr(){
        return $this->hasOne('App\goodsattr');
    }

}
