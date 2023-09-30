<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('orders', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('address')->nullable();
                $table->unsignedBigInteger('product_id');
                $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete()->cascadeOnUpdate(); // Foreign key relationship with customers ta
                $table->string('quantity')->nullable();
                $table->string('price')->nullable();
                $table->string('image')->nullable();
                $table->string('payment_status')->nullable();
                $table->string('delivery_status')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
