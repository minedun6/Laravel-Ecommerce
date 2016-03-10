<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('code');
                $table->string('title');
                $table->float('price');
                $table->text('description');
                $table->integer('qty');
                $table->string('img')->nullable();
                $table->integer('category_id')->unsigned()->nullable();;
                $table->foreign('category_id')->references('id')->on('categories');
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
