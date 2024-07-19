<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ThemeCategory;



return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Tên của theme');
            $table->text('description')->nullable()->comment('Mô tả của theme');
            $table->integer('price')->comment('Giá của theme');
            $table->string('thumbnail')->comment('Ảnh đại diện của theme');
            $table->string('slug')->unique()->comment('Slug của theme');
            $table->tinyInteger('status')->comment('Trạng thái của theme: 0 - Inactive, 1 - Active');
            $table->string('file')->comment('Đường dẫn file của theme');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('theme_categories')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
