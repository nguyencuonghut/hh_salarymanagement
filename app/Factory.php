<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{

    public $fillable = ['stt',
                        'ma_nhan_vien',
                        'ho_va_ten',
                        'email',
                        'bo_phan',
                        'ngay_phep',
                        'ngay_cong_quy_dinh',
                        'ngay_cong_thuc_te',
                        'luong_cb',
                        'luong_vi_tri',
                        'luong_nang_luc',
                        'tien_phu_cap',
                        'ngay_pc',
                        'so_tien_pc',
                        'luong_ngoai_gio',
                        'cong_ngoai_gio',
                        'so_tien_ngoai_gio',
                        'tien_cong_ca_3',
                        'so_cong_ca_3',
                        'phu_cap_1_ca',
                        'so_tien_cong_ca_3',
                        'so_tien_kpi',
                        'kpi',
                        'tien_kpi',
                        'thuong_sl',
                        'ho_tro_tru',
                        'tien_sinh_nhat',
                        'tong_luong',
                        'cac_khoan_giam_tru',
                        'tncn',
                        'bao_hiem',
                        'thuc_linh',
    ];

}