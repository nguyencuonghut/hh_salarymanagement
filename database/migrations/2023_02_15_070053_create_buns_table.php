<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buns', function (Blueprint $table) {
            $table->bigInteger('stt');
            $table->string('code', 10);
            $table->string('ho_va_ten', 60);
            $table->string('chuc_vu', 60);
            $table->float('cong_thuc_te');
            $table->float('nghi_phep');
            $table->float('ca_dem');
            $table->float('dm_vs');
            $table->float('ngay_le');
            $table->float('truc_trua');
            $table->float('tang_ca');
            $table->float('ngay_khong_cham_cong_van_tinh_tro_cap');
            $table->bigInteger('so_lan_ra_trai');
            $table->bigInteger('phan_loai_nhan_vien');
            $table->bigInteger('hd_luong_cung');
            $table->bigInteger('hd_phu_cap');
            $table->bigInteger('hd_tong_luong');
            $table->bigInteger('hd_tro_cap_o_trai');
            $table->bigInteger('hd_trach_nhiem');
            $table->bigInteger('hd_hieu_suat_cong_viec');
            $table->bigInteger('hd_tro_cap_di_lai');
            $table->bigInteger('hd_ho_tro_khac');
            $table->bigInteger('tt_luong_cung');
            $table->bigInteger('tt_phu_cap');
            $table->bigInteger('tt_lam_dem');
            $table->bigInteger('tt_tang_ca_le');
            $table->bigInteger('tt_tru_tien_dm_vs');
            $table->bigInteger('tt_tong_luong');
            $table->bigInteger('tc_o_trai');
            $table->bigInteger('tc_trach_nhiem');
            $table->bigInteger('tc_di_lai');
            $table->bigInteger('tc_ho_tro_khac');
            $table->bigInteger('tc_truc_tet');
            $table->bigInteger('thuong_chuong');
            $table->bigInteger('thuong_nang_suat');
            $table->bigInteger('thuong_hieu_suat_cong_viec');
            $table->bigInteger('thuong_phong_dich');
            $table->bigInteger('sinh_nhat');
            $table->bigInteger('cac_khoan_bu_tru');
            $table->bigInteger('tong_thu_nhap');
            $table->bigInteger('thu_nhap_chiu_thue');
            $table->bigInteger('bao_hiem');
            $table->bigInteger('cong_doan');
            $table->bigInteger('tang_ca_khong_chiu_thue');
            $table->bigInteger('tong_gtgc');            
            $table->bigInteger('thu_nhap_tinh_thue');
            $table->bigInteger('thue_phai_nop');
            $table->bigInteger('so_tien_chi_tra');
            $table->string('email', 60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("buns");
    }
}
