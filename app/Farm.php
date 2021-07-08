<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{

    public $fillable = ['stt',
                        'code',
                        'ho_va_ten',
                        'chuc_vu',
                        'bo_phan',
                        'email',
                        'phan_loai_nv',
                        'luong_vi_tri_nang_luc',
                        'thuong_kpi',
                        'thuong_nang_suat',
                        'ngay_cong_thuc_te',
                        'nghi_phep',
                        'nghi_le',
                        'truc_tet',
                        'tong_cong',
                        'luong_theo_ngay_cong',
                        'luong_200',
                        'cong_ca_dem',
                        'luong_cong_them',
                        'tong_luong_chinh',
                        'thuong_kpi_thuc_te',
                        'tien_thuong_nang_suat',
                        'tong_phu_cap_tro_cap',
                        'tong_gio_tang_ca',
                        'tong_tien_tang_ca',
                        'khoan_bu_tru_khac',
                        'tong_thu_nhap',
                        'thu_nhap_chiu_thue',
                        'thu_bao_hiem_cong_doan',
                        'tong_gtgc',
                        'thu_nhap_tinh_thue',
                        'thue_phai_nop',
                        'thuc_linh',
    ];

}