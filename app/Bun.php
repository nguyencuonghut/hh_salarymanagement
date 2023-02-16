<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Bun extends Model
{

    public $fillable = ['stt',
                        'code',
                        'ho_va_ten',
                        'chuc_vu',
                        'cong_thuc_te',
                        'nghi_phep',
                        'ca_dem',
                        'dm_vs',
                        'ngay_le',
                        'tang_ca',
                        'ngay_khong_cham_cong_van_tinh_tro_cap',
                        'so_lan_ra_trai',
                        'hd_luong_cung',
                        'hd_phu_cap',
                        'hd_tong_luong',
                        'hd_tro_cap_o_trai',
                        'hd_trach_nhiem',
                        'tt_luong_cung',
                        'tt_phu_cap',
                        'tt_lam_dem',
                        'tt_tang_ca_le',
                        'tt_tru_tien_dm_vs',
                        'tt_tong_luong',
                        'tc_o_trai',
                        'tc_trach_nhiem',
                        'tc_truc_tet',
                        'thuong',
                        'cac_khoan_bu_tru',
                        'tong_thu_nhap',
                        'thu_nhap_chiu_thue',
                        'bao_hiem',
                        'tang_ca_khong_chiu_thue',
                        'tong_gtgc',
                        'thu_nhap_tinh_thue',
                        'thue_phai_nop',
                        'luong_da_ung',
                        'tru_bhyt',
                        'so_tien_chi_tra',
                        'hinh_thuc_thanh_toan',
                        'email'
    ];

}