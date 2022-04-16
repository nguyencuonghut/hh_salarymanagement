<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms', function (Blueprint $table) {
            $table->bigInteger('stt');
            $table->string('code', 10);
            $table->string('ho_va_ten', 60);
            $table->string('chuc_vu', 60);
            $table->string('bo_phan', 60);
            $table->string('email', 60);
            $table->string('phan_loai_nv', 60);
            $table->bigInteger('luong_vi_tri_nang_luc');
            $table->bigInteger('thuong_kpi');
            $table->bigInteger('thuong_nang_suat');
            $table->float('ngay_cong_thuc_te');
            $table->float('nghi_phep');
            $table->float('nghi_le');
            $table->float('truc_tet');//Add new
            $table->bigInteger('tong_cong');
            $table->bigInteger('luong_theo_ngay_cong');
            $table->bigInteger('luong_200');
            $table->bigInteger('cong_ca_dem');//Add new
            $table->bigInteger('luong_cong_them');//Add new
            $table->bigInteger('tong_luong_chinh');
            $table->bigInteger('thuong_kpi_thuc_te');
            $table->bigInteger('tien_thuong_nang_suat');
            $table->bigInteger('tien_thuong_phong_dich');
            $table->bigInteger('tong_phu_cap_tro_cap');
            $table->float('tong_gio_tang_ca');
            $table->bigInteger('tong_tien_tang_ca');
            $table->bigInteger('khoan_bu_tru_khac');
            $table->bigInteger('tong_thu_nhap');
            $table->bigInteger('thu_nhap_chiu_thue');
            $table->bigInteger('thu_bao_hiem_cong_doan');
            $table->bigInteger('tong_gtgc');
            $table->bigInteger('thu_nhap_tinh_thue');
            $table->bigInteger('thue_phai_nop');
            $table->bigInteger('thuc_linh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("farms");
    }
}
