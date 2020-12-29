<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factories', function (Blueprint $table) {
            $table->bigInteger('stt');
            $table->string('ma_nhan_vien', 10);
            $table->string('ho_va_ten', 60);
            $table->string('email', 60);
            $table->string('bo_phan', 60);
            $table->bigInteger('ngay_phep');
            $table->bigInteger('ngay_cong_quy_dinh');
            $table->float('ngay_cong_thuc_te');
            $table->bigInteger('luong_cb');
            $table->bigInteger('luong_vi_tri');
            $table->bigInteger('luong_nang_luc');
            $table->bigInteger('tien_phu_cap');
            $table->bigInteger('ngay_pc');
            $table->bigInteger('so_tien_pc');
            $table->bigInteger('luong_ngoai_gio');
            $table->float('cong_ngoai_gio');
            $table->bigInteger('so_tien_ngoai_gio');
            $table->bigInteger('tien_cong_ca_3');
            $table->float('so_cong_ca_3');
            $table->bigInteger('phu_cap_1_ca');
            $table->bigInteger('so_tien_cong_ca_3');
            $table->bigInteger('so_tien_kpi');
            $table->float('kpi');
            $table->bigInteger('tien_kpi');
            $table->bigInteger('thuong_sl');
            $table->bigInteger('ho_tro_tru');
            $table->bigInteger('tong_luong');
            $table->bigInteger('cac_khoan_giam_tru');
            $table->bigInteger('tncn');
            $table->bigInteger('bao_hiem');
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
        Schema::drop("factories");
    }
}
