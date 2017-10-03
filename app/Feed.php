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
                        'tra_kp_dao_tao_tra_giu_lai_thuong_sl_do_cong_no_npp_qua_han',
                        'thuong_san_luong',
                        'san_luong_goc',
                        'san_luong_thuc_hien',
                        'tien_thuong_dat_goc',
                        'san_luong_n1',
                        'san_luong_n2',
                        'san_luong_n3',
                        'san_luong_n4',
                        'thuong_iomc',
                        'vuot_n1',
                        'vuot_n2',
                        'vuot_n3',
                        'vuot_n4',
                        'thuong_vuot',
                        'quyet_toan_quy',
                        'ho_tro_hoac_tru_thuong_sl',
                        'thuong_dat_goc_quy',
                        'cac_khoan_giam_tru',
                        'giu_kp_dao_tao_cong_no_npp_qua_han',
                        'thue_tncn',
                        'bhxh',
                        'giu_lai_luong',
                        'luong_con_linh,'
    ];

}