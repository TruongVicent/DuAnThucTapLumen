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
        $table->string('name');
        $table->text('description')->nullable();
        $table->integer('price')->comment('Giá của themes');
        $table->string('thumbnail');
        $table->string('slug')->unique();
        $table->tinyInteger('status')->comment('trạng thái');
        $table->string('file');
        $table->foreignIdFor(ThemeCategory::class)->comment('Danh mục theme');
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
