<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{

    public $fillable = ['stt',
                        'ma_nhan_vien',
                        'ho_va_ten',
                        'email',
                        'ngay_cong_quy_dinh',
                        'ngay_cong_thuc_te',
                        'ngay_cong_tac_phi',
                        'luong_va_phu_cap',
                        'luong_thuc_te',
                        'cong_tac_phi',
                        'phu_cap',
                        'dien_thoai',
                        'tra_giu_lai_thuong_sl_do_cong_no_npp_qua_han',
                        'ho_tro_tru_khac',
                        'thuong_san_luong',
                        'san_luong_ke hoach',
                        'san_luong_thuc_hien',
                        'ty_le_gia_cam_de_thang_nay',
                        'ty_le_gia_cam_de_thang_trươc',
                        'ngan_sach',
                        'ty_le_mo_trai_KEY',
                        'ty_le_xay_dung_trai_KEY',
                        'tien_thuong_dat_goc',
                        'san_luong_n1',
                        'san_luong_n2',
                        'san_luong_n3',
                        'thuong_iomc',
                        'vuot_n1',
                        'vuot_n2',
                        'vuot_n3',
                        'thuong_vuot',
                        'thuong_mo_dai_ly_moi', // 11-2-2018
                        'thuong_quy', // 11-2-2018
                        'truy_thu_truy_linh_thuong_dat', // 11-2-2018
                        'thuong_khac',
                        'tru_thuong',
                        'cac_khoan_giam_tru',
                        'thue_tncn',
                        'bhxh',
                        'giu_kp_dao_tao_cong_no_npp_qua_han',
                        'giu_lai_luong',
                        'luong_con_linh,'
    ];

}