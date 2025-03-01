<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quan_tri_viens', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten');
            $table->string('email');
            $table->string('password');
            $table->string('so_dien_thoai');
            $table->date('ngay_sinh');
            $table->string('chuc_vu');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quan_tri_viens');
    }
};
