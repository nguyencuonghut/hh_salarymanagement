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
                        'cong_tac_phi_phu_cap_tra_kinh_phi_dao_tao',
                        'luong_thuc_te',
                        'cong_tac_phi',
                        'phu_cap',
                        'dien_thoai',
                        'tra_kp_dao_tao',
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
                        'cac_khoan_giam_tru',
                        'kinh_phi_dao_tao',
                        'thue_tncn',
                        'bhxh',
                        'tong_luong_linh',
                        'giu_lai_luong',
                        'luong_con_linh,'
    ];

}