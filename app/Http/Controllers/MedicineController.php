<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Medicine;
use Excel;
use Mail;
class MedicineController extends Controller
{


    /**
     * Return View file
     *
     * @var array
     */
    public function importExport()
    {
        return view('importExportMedicine');
    }

    /**
     * File Export Code
     *
     * @var array
     */
    public function sendmedicinemail(Request $request, $type)
    {
        /* Get email address from database */
        $users = Medicine::where('email', '!=', '')->get();
        ini_set('max_execution_time', 0);

        foreach ($users as $user)
        {
            $email = $user->email;
            //echo $user->ten_nhan_vien;
            /* Create message content */
            $emailcontent = array('ma_nhan_vien' => $user->ma_nhan_vien,
                'ho_va_ten' => $user->ho_va_ten,
                'ngay_cong_quy_dinh' => $user->ngay_cong_quy_dinh,
                'ngay_cong_thuc_te' => $user->ngay_cong_thuc_te,
                'ngay_cong_tac_phi' => $user->ngay_cong_tac_phi,
                'luong_va_phu_cap' => $user->luong_va_phu_cap,
                'luong_thuc_te' => $user->luong_thuc_te,
                'tien_cong_tac_phi' => $user->tien_cong_tac_phi,
                'phu_cap' => $user->phu_cap,
                'dien_thoai_cong_tru' => $user->dien_thoai_cong_tru,
                'thuong_kpi' => $user->thuong_kpi,
                'ho_tro_hoac_tru_luong_phu_cap' => $user->ho_tro_hoac_tru_luong_phu_cap,
                'tong_thuong_doanh_so' => $user->tong_thuong_doanh_so,
                'doanh_so_khoan_thang' => $user->doanh_so_khoan_thang,
                'doanh_so_thuc_hien_thang' => $user->doanh_so_thuc_hien_thang,
                'doanh_so_khoan_quy' => $user->doanh_so_khoan_quy,
                'doanh_so_goc_quy' => $user->doanh_so_goc_quy,
                'doanh_so_thuc_hien_quy' => $user->doanh_so_thuc_hien_quy,
                'doanh_so_khoan_nam' => $user->doanh_so_khoan_nam,
                'doanh_so_thuc_hien_nam' => $user->doanh_so_thuc_hien_nam,
                'thuong_dat_ke_hoach_thang' => $user->thuong_dat_ke_hoach_thang,
                'thuong_dat_ke_hoach_quy' => $user->thuong_dat_ke_hoach_quy,
                'thuong_vuot_goc_theo_quy' => $user->thuong_vuot_goc_theo_quy,
                'thuong_thi_dua' => $user->thuong_thi_dua,
                'thuong_doanh_so_nam' => $user->thuong_doanh_so_nam,
                'ho_tro_hoac_tru_thuong_doanh_so' => $user->ho_tro_hoac_tru_thuong_doanh_so,
                'cac_khoan_giam_tru' => $user->cac_khoan_giam_tru,
                'thue_tncn' => $user->thue_tncn,
                'bhxh_bhyt' => $user->bhxh_bhyt,
                'giu_lai_luong' => $user->giu_lai_luong,
                'luong_con_linh' => $user->luong_con_linh,
            );

            /* Send the email */
			set_time_limit(1200);
            Mail::send('medicine', $emailcontent, function ($message) use ($email) {
                $message->from('luong_thuoc@honghafeed.com.vn', 'Lương nhân viên KD Thuốc');
                $message->to($email)
                    ->subject('Thông tin lương tháng ' . date('m-Y', strtotime('last month')));
            });
        }
        return back()->with('success','Mail đã được gửi thành công');
    }

    /**
     * Import file into database Code
     *
     * @var array
     */
    public function importExcelMedicine(Request $request)
    {
        Medicine::truncate();
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            //$data = Excel::load($path, function($reader) {})->get();
            $extension = $request->file('import_file')->getClientOriginalExtension();
            $destinationPath = 'upload';
            $fileName = 'Thuoc' . date('m Y').'.'.$extension; // renameing image
            $request->file('import_file')->move($destinationPath, $fileName);
            $data = Excel::load('public/upload/'.$fileName, function($reader) {})->get();

            if(!empty($data) && $data->count()){

                foreach ($data->toArray() as $key => $value) {
                    $insert[] = ['stt' => $value['stt'],
                        'ma_nhan_vien' => $value['ma_nhan_vien'],
                        'ho_va_ten' => $value['ho_va_ten'],
                        'email' => $value['email'],
                        'ngay_cong_quy_dinh' => $value['ngay_cong_quy_dinh'],
                        'ngay_cong_thuc_te' => $value['ngay_cong_thuc_te'],
                        'ngay_cong_tac_phi' => $value['ngay_cong_tac_phi'],
                        'luong_va_phu_cap' => $value['luong_va_phu_cap'],
                        'luong_thuc_te' => $value['luong_thuc_te'],
                        'tien_cong_tac_phi' => $value['tien_cong_tac_phi'],
                        'phu_cap' => $value['phu_cap'],
                        'dien_thoai_cong_tru' => $value['dien_thoai_cong_tru'],
                        'thuong_kpi' => $value['thuong_kpi'],
                        'ho_tro_hoac_tru_luong_phu_cap' => $value['ho_tro_hoac_tru_luong_phu_cap'],
                        'cac_khoan_giam_tru' => $value['cac_khoan_giam_tru'],
                        'thue_tncn' => $value['thue_tncn'],
                        'bhxh_bhyt' => $value['bhxh_bhyt'],
                        'giu_lai_luong' => $value['giu_lai_luong'],
                        'luong_con_linh' => $value['luong_con_linh'],
                        'doanh_so_khoan_thang' => $value['doanh_so_khoan_thang'],
                        'doanh_so_thuc_hien_thang' => $value['doanh_so_thuc_hien_thang'],
                        'doanh_so_khoan_quy' => $value['doanh_so_khoan_quy'],
                        'doanh_so_goc_quy' => $value['doanh_so_goc_quy'],
                        'doanh_so_thuc_hien_quy' => $value['doanh_so_thuc_hien_quy'],
                        'doanh_so_khoan_nam' => $value['doanh_so_khoan_nam'],
                        'doanh_so_thuc_hien_nam' => $value['doanh_so_thuc_hien_nam'],
                        'thuong_dat_ke_hoach_thang' => $value['thuong_dat_ke_hoach_thang'],
                        'thuong_dat_ke_hoach_quy' => $value['thuong_dat_ke_hoach_quy'],
                        'thuong_vuot_goc_theo_quy' => $value['thuong_vuot_goc_theo_quy'],
                        'thuong_thi_dua' => $value['thuong_thi_dua'],
                        'thuong_doanh_so_nam' => $value['thuong_doanh_so_nam'],
                        'ho_tro_hoac_tru_thuong_doanh_so' => $value['ho_tro_hoac_tru_thuong_doanh_so'],
                        'tong_thuong_doanh_so' => $value['tong_thuong_doanh_so'],
                    ];
                }


                if(!empty($insert)){
                    Medicine::insert($insert);
                    return back()->with('success','Đã import bảng lương thành công.');
                }

            }

        }

        return back()->with('error','Vui lòng kiểm tra file của bạn. Có lỗi xảy ra.');
    }
}
