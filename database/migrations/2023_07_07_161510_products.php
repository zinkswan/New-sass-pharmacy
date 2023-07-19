<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
         Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->string('sku');
            $table->unsignedBigInteger('categoryId');
            $table->unsignedBigInteger('typeId');
            $table->unsignedBigInteger('providerId');
            $table->integer('quantity');
            $table->integer('minQuantity');
            $table->unsignedBigInteger('createdBy');
            $table->unsignedBigInteger('status');
            $table->integer('tax');
            $table->text('description');
            $table->double('buyingPrice');
            $table->double('sellingPrice');
            $table->integer('active');
            $table->timestamps();

            $table->foreign('categoryId')->references('id')->on('categories');
            $table->foreign('typeId')->references('id')->on('types');
            $table->foreign('createdBy')->references('id')->on('users');
            $table->foreign('status')->references('id')->on('statuses');
            $table->foreign('providerId')->references('id')->on('providers');
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
};
