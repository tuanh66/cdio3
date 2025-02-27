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
        Schema::create('quy_dinhs', function (Blueprint $table) {
            $table->id();
            $table->integer('ma_so');
            $table->integer('so_diem');
            $table->string('noi_dung');
            $table->string('ghi_chu');
            $table->string('loai_diem');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quy_dinhs');
    }
};
