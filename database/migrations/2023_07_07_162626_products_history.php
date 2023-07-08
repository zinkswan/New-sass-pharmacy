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
        Schema::create('productsHistory', function (Blueprint $table) {
            $table->id();
            $table->integer('productId');
            $table->integer('providerId');
            $table->integer('typeId');
            $table->integer('quantity');
            $table->integer('invoiceId');
            $table->text('description');
            $table->timestamps();

            $table->foreign('productId')->references('id')->on('products');
            $table->foreign('providerId')->references('id')->on('providers');
            $table->foreign('typeId')->references('id')->on('types');
            $table->foreign('invoiceId')->references('id')->on('invoices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productsHistory');
    }
};
