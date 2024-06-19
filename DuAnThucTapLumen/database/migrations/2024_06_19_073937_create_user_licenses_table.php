<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\License;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_licenses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->comment('Người sở hữu');
            $table->foreignIdFor(License::class)->comment('Giấy phép sở hữu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_licenses');
    }
};
