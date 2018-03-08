<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->bigInteger('stt');
            $table->string('ma_nhan_vien', 10);
            $table->string('ho_va_ten', 60);
            $table->string('email', 60);
            $table->bigInteger('ngay_cong_quy_dinh');
            $table->bigInteger('ngay_cong_thuc_te');
            $table->bigInteger('ngay_cong_tac_phi');
            $table->bigInteger('luong_va_phu_cap');
            $table->bigInteger('luong_thuc_te');
            $table->bigInteger('cong_tac_phi');
            $table->bigInteger('phu_cap');
            $table->bigInteger('dien_thoai');
            $table->bigInteger('tra_giu_lai_thuong_sl_do_cong_no_npp_qua_han');
            $table->bigInteger('ho_tro_tru_khac');
            $table->bigInteger('thuong_san_luong');
            $table->bigInteger('san_luong_ke_hoach');
            $table->bigInteger('san_luong_thuc_hien');
            $table->float('ty_le_gia_cam_de_thang_nay');
            $table->float('ty_le_gia_cam_de_thang_truoc');
            $table->float('ngan_sach');
            $table->float('ty_le_mo_trai_KEY');
            $table->float('ty_le_xay_dung_trai_KEY');
            $table->bigInteger('tien_thuong_dat_goc');
            $table->bigInteger('san_luong_n1');
            $table->bigInteger('san_luong_n2');
            $table->bigInteger('san_luong_n3');
            $table->bigInteger('thuong_iomc');
            $table->bigInteger('vuot_n1');
            $table->bigInteger('vuot_n2');
            $table->bigInteger('vuot_n3');
            $table->bigInteger('thuong_vuot');
            $table->bigInteger('thuong_mo_dai_ly_moi'); // 11-2-2018
            $table->bigInteger('thuong_quy'); // 11-2-2018
            $table->bigInteger('truy_thu_truy_linh_thuong_dat');
            $table->bigInteger('thuong_khac');
            $table->bigInteger('tru_thuong');
            $table->bigInteger('cac_khoan_giam_tru');
            $table->bigInteger('thue_tncn');
            $table->bigInteger('bhxh');
            $table->bigInteger('giu_kp_dao_tao_cong_no_npp_qua_han');
            $table->bigInteger('giu_lai_luong');
            $table->bigInteger('luong_con_linh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("feeds");
    }
}
