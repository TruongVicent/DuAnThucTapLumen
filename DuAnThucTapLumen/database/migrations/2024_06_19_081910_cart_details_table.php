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
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->string('theme_name')->comment('Tên sản phẩm');
            $table->integer('price')->comment('Đơn giá');
            $table->string('thumbnail')->comment('Ảnh sản phẩm');
            // $table->unsignedBigInteger('cart_id');
            // $table->foreign('cart_id')->references('id')->on('carts')->constrained()->cascadeOnDelete();
            // $table->unsignedBigInteger('theme_id');
            // $table->foreign('theme_id')->references('id')->on('themes')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
