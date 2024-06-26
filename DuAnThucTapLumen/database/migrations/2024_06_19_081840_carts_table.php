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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            // $table->string('verification')->comment('Mã OTP xác nhận');
            $table->string('fullname')->comment('Tên người dùng');
            $table->string('email')->comment('Email người dùng');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->constrained()->cascadeOnDelete();
            $table->integer('status')->comment('Trạng thái');
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