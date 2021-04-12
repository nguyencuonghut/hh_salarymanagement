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
            //$table->string('ngay_vao', 60);
            //$table->string('ngay_ky_hop_dong', 60);
            //$table->date('ngay_vao');
            //$table->date('ngay_ky_hop_dong');
            $table->string('email', 60);
            $table->string('phan_loai_nv', 60);
            //$table->bigInteger('luong_thu_viec');
            $table->bigInteger('luong_vi_tri_nang_luc');
            $table->bigInteger('thuong_kpi');
            //$table->bigInteger('phu_cap_thue_nha');
            $table->bigInteger('thuong_nang_suat');
            $table->bigInteger('phu_cap_di_lai');
            $table->bigInteger('phu_cap_an');
            $table->bigInteger('phu_cap_dien_thoai');
            //$table->bigInteger('cong_tac_phi');
            $table->bigInteger('kiem_nhiem');
            //$table->bigInteger('thuong_phong_dich');
            $table->bigInteger('ho_tro_chua_thuong');
            //$table->bigInteger('ho_tro_khac');
            $table->bigInteger('tong_luong_thoa_thuan');
            $table->float('ngay_cong_thuc_te');
            $table->float('nghi_phep');
            $table->float('nghi_le');
            $table->float('truc_tet');//Add new
            $table->bigInteger('tong_cong');
            $table->bigInteger('luong_theo_ngay_cong');
            $table->bigInteger('luong_200');
            $table->bigInteger('cong_ca_dem');//Add new
            $table->bigInteger('luong_cong_them');//Add new
            //$table->bigInteger('thuong_kpi_thuc_te');
            $table->bigInteger('tong_luong_chinh');
            //$table->bigInteger('thue_nha');
            $table->bigInteger('thuong_kpi_thuc_te');
            $table->bigInteger('tien_thuong_nang_suat');
            $table->bigInteger('di_lai');
            $table->bigInteger('tien_an');
            $table->bigInteger('dien_thoai');
            //$table->bigInteger('cong_tac_phi_thuc_te');
            $table->bigInteger('tien_kiem_nhiem');
            //$table->bigInteger('phong_dich');
            $table->bigInteger('tien_ho_tro_chua_thuong');
            //$table->bigInteger('ho_tro_khac_thuc_te');
            $table->bigInteger('tong_phu_cap_tro_cap');
            $table->float('gio_truc_trua');
            $table->float('gio_tang_ca_150');
            $table->float('gio_tang_ca_180');
            $table->float('gio_tang_ca_300');
            $table->float('tong_gio_tang_ca');
            $table->bigInteger('tien_truc_trua');
            $table->bigInteger('tien_tang_ca_150');
            $table->bigInteger('tien_tang_ca_180');
            $table->bigInteger('tien_tang_ca_300');
            $table->bigInteger('tong_tien_tang_ca');
            $table->bigInteger('khoan_bu_tru_khac');
            $table->bigInteger('tong_thu_nhap');
            $table->bigInteger('thu_nhap_chiu_thue');
            $table->bigInteger('muc_dong');
            $table->bigInteger('thu_bao_hiem');
            $table->bigInteger('so_npt');
            $table->bigInteger('tong_gtgc');
            $table->bigInteger('tong_cac_khoan_giam_tru');
            $table->bigInteger('thu_nhap_tinh_thue');
            $table->bigInteger('thue_phai_nop');
            $table->bigInteger('doan_phi_nld');
            $table->bigInteger('thuc_linh');
            $table->bigInteger('bhxh');
            $table->bigInteger('doan_phi_cty');
            $table->bigInteger('tong_phi_cty');
            $table->string('so_tai_khoan');
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
