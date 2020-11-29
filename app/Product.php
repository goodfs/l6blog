<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected  $table='products';
    protected  $connection='mysql';
    protected  $primaryKey='id';
    protected  $casts=[
        'attr'=>'array'
    ];
    protected $fillable=['title','category_id','created_at',
        'updated_at',
        'price',
        'attr',
        'deleted_at'
        ];
}
