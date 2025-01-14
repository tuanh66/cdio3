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
        Schema::create('vieclams', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten');
            $table->string('cong_ty');
            $table->integer('cong_viec');
            $table->integer('muc_luong');
            $table->integer('dia_diem');
            $table->date('ngay_tao');
            $table->date('han_nop');
            $table->integer('kinh_nghiem');
            $table->integer('cap_bac');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vieclams');
    }
};
