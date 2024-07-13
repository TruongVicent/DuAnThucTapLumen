<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Theme;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Theme::class)->comment('giấy phép cuả theme');
            $table->string('key')->comment('Khoá của giấy phép');
            $table->date('expiration_date')->comment('Ngày hết hạng');
            $table->tinyInteger('status')->comment('Trạng thái hoạt động');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};
