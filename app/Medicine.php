<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
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
                        'tien_cong_tac_phi',
                        'phu_cap',
                        'dien_thoai_cong_tru',
                        'tra_kp_dao_tao',
                        'thuong_kpi',
                        'ho_tro_hoac_tru_luong_phu_cap',
                        'cac_khoan_giam_tru',
                        'thue_tncn',
                        'bhxh',
                        'thu_kp_dao_tao',
                        'giu_lai_luong',
                        'luong_con_linh',
                        'doanh_so_khoan_thang',
                        'doanh_so_thuc_hien_thang',
                        'thuong_ds_thang',
                        'doanh_so_thuc_hien_den_ngay_20',
                        'thuong_them_20_phan_tram',
                        'doanh_so_khoan_quy',
                        'doanh_so_quy_goc_2016',
                        'doanh_so_thuc_hien_quy',
                        'thuong_vuot_doanh_so_quy',
                        'doanh_so_khoan_nam',
                        'doanh_so_thuc_hien_nam',
                        'thuong_doanh_so_nam',
                        'ho_tro_hoac_tru_thuong_doanh_so',
                        'tong_thuong_doanh_so',
    ];

}