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
        Schema::create('viec_lams', function (Blueprint $table) {
            $table->id();
            $table ->string('ho_va_ten');
            $table->string('cong_ty');
            $table->string('cong_viec');
            $table->string('muc_luong');
            $table->string('dia_diem');
            $table->string('ngay_tao');
            $table->string('han_nop');
            $table->string('kinh_nghiem');
            $table->string('cap_bac');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viec_lams');
    }
};
