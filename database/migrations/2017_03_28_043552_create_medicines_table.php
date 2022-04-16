<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigInteger('stt');
            $table->string('ma_nhan_vien');
            $table->string('ho_va_ten');
            $table->string('email');
            $table->bigInteger('ngay_cong_quy_dinh');
            $table->bigInteger('ngay_cong_thuc_te');
            $table->bigInteger('ngay_cong_tac_phi');
            $table->bigInteger('luong_va_phu_cap');
            $table->bigInteger('luong_thuc_te');
            $table->bigInteger('tien_cong_tac_phi');
            $table->bigInteger('phu_cap');
            $table->bigInteger('dien_thoai_cong_tru');
            $table->bigInteger('thuong_kpi');
            $table->bigInteger('ho_tro_hoac_tru_luong_phu_cap');
            $table->bigInteger('cac_khoan_giam_tru');
            $table->bigInteger('thue_tncn');
            $table->bigInteger('bhxh_bhyt');
            $table->bigInteger('giu_lai_luong');
            $table->bigInteger('luong_con_linh');
            $table->bigInteger('doanh_so_khoan_thang');
            $table->bigInteger('doanh_so_thuc_hien_thang');
            $table->bigInteger('doanh_so_khoan_quy');
            $table->bigInteger('doanh_so_goc_quy'); // New by TrangNT
            $table->bigInteger('doanh_so_thuc_hien_quy');
            $table->bigInteger('doanh_so_khoan_nam');
            $table->bigInteger('doanh_so_thuc_hien_nam');
            $table->bigInteger('thuong_dat_ke_hoach_thang');
            $table->bigInteger('thuong_dat_ke_hoach_quy');
            $table->bigInteger('thuong_vuot_goc_theo_quy');
            $table->bigInteger('thuong_thi_dua'); // New by TrangNT
            $table->bigInteger('thuong_doanh_so_nam');
            $table->bigInteger('ho_tro_hoac_tru_thuong_doanh_so');
            $table->bigInteger('tong_thuong_doanh_so');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("medicines");
    }
}
