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
            $table->bigInteger('cong_tac_phi_phu_cap_tra_kinh_phi_dao_tao');
            $table->bigInteger('luong_thuc_te');
            $table->bigInteger('cong_tac_phi');
            $table->bigInteger('phu_cap');
            $table->bigInteger('dien_thoai');
            $table->bigInteger('tra_kp_dao_tao');
            $table->bigInteger('ho_tro_tru_khac');
            $table->bigInteger('thuong_san_luong');
            $table->bigInteger('san_luong_goc');
            $table->bigInteger('san_luong_thuc_hien');
            $table->bigInteger('tien_thuong_dat_goc');
            $table->bigInteger('san_luong_n1');
            $table->bigInteger('san_luong_n2');
            $table->bigInteger('san_luong_n3');
            $table->bigInteger('san_luong_n4');
            $table->bigInteger('thuong_iomc');
            $table->bigInteger('vuot_n1');
            $table->bigInteger('vuot_n2');
            $table->bigInteger('vuot_n3');
            $table->bigInteger('vuot_n4');
            $table->bigInteger('thuong_vuot');
            $table->bigInteger('quyet_toan_quy');
            $table->bigInteger('ho_tro_hoac_tru_thuong_sl');
            $table->bigInteger('cac_khoan_giam_tru');
            $table->bigInteger('kinh_phi_dao_tao');
            $table->bigInteger('thue_tncn');
            $table->bigInteger('bhxh');
            $table->bigInteger('tong_luong_linh');
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
