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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('name'); 
            $table->string('email')->unique(); 
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->tinyInteger('usertype')->default(0); // 0 for regular users, 1 for admin users
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
