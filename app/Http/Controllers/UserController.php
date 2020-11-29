<?php

namespace App\Http\Controllers;

use App\goodsdoc;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function index(){

        $goods=goodsdoc::where('goodscode','800003')->where('entid','E2HRSRS6WAF')->get();

        //echo $goods->toSql();
        dd($goods);

        //return  'ddfdfdf';
        //return config(config.database.DB_DATABASE);
        //$res=DB::select("select * from users");
        //$res=DB::table('users')->where('id','=','1')->orWhere('id','2')->dump();

        //$res=DB::table('users')->increment('score',10);

       // dd($res);

        //DB::transaction()
    }

    public function modelTest(){
        $product=Product::query()->create([
            'title'=>'水杯',
            'category_id'=>1,
            'is_on_sale'=>1,
            'price'=>'1200',
            'attr'=>['高'=>'10cm','容积'=>'200ml']
        ]);
        dd($product);
    }

    public function testCollection(){
        $conect=collect([1,2,3]);
        dd($conect->toArray());
    }
    public function cacheTest(){
        Cache::put('key1','value1',10);
        Cache::put('key2','value2');
        Cache::put('key3','value3',now()->addMinutes(1));


        $v1=Cache::get('key1');
        $v2=Cache::get('key2');
        $v3=Cache::get('key3');

        dd($v1,$v2,$v3);

    }

    public function facadeTest(){
        \App\Facades\Product::getProduct(1);
     }
}
