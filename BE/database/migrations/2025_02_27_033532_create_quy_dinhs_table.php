<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quy_dinhs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_so');
            $table->integer('so_diem');
            $table->string('noi_dung');
            $table->string('ghi_chu');
            $table->string('loai_diem');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quy_dinhs');
    }
};
