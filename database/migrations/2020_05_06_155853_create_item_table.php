<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('size');
            $table->text("des")->nullable();
            $table->bigInteger('quantity');
            $table->bigInteger('price');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('subtype_id');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('subtype_id')->references('id')->on('subtypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
