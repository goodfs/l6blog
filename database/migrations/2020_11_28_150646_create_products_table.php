<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100)->comment('商品标题');
            $table->string('category_id')->index()->comment('类目ID');
            $table->tinyInteger('is_on_sale')->comment('是否上架');
            $table->string('pic_url')->default('')->comment('主图地址');
            $table->bigInteger('price')->default(0)->comment('价格,单位分');
            $table->longText('attr')->comment('商品属性json格式');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
