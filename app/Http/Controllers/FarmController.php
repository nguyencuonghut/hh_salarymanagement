<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farm;
use Excel;
use Mail;
use \Swift_SmtpTransport;
use \Swift_Mailer;
use \Swift_Plugins_AntiFloodPlugin;
use \Swift_Message;
use \MailTransport;

class FarmController extends Controller
{


    /**
     * Return View file
     *
     * @var array
     */
    public function importExport()
    {
        return view('importExportFarm');
    }

    /**
     * Send mail automatically
     *
     * @var array
     */
    public function sendfarmmail(Request $request, $type)
    {
		// Setup your luong_trai@honghafeed mailer
		$transport = Swift_SmtpTransport::newInstance(env('MAIL_HOST'), env('MAIL_PORT'), env('MAIL_ENCRYPTION'));
		$transport->setUsername('luong_trai@honghafeed.com.vn');
		$transport->setPassword('Hongha@#2020');

		$farm_mailer = new Swift_Mailer($transport);
		//dd($farm_mailer);
		// Set the mailer as farm_mailer
		Mail::setSwiftMailer($farm_mailer);

		
		
		
        /* Get email address from database */
		$users = Farm::where('email', '!=', '')->get();
        ini_set('max_execution_time', 0);

        foreach ($users as $user)
        {
            $email = $user->email;
            //echo $user->ten_nhan_vien;
            /* Create message content */
            $emailcontent = array(
                'stt' => $user->stt,
                'code' => $user->code,
                'ho_va_ten' => $user->ho_va_ten,
                'chuc_vu' => $user->chuc_vu,
                'bo_phan' => $user->bo_phan,
                'ngay_vao' => $user->ngay_vao,
                'ngay_ky_hop_dong' => $user->ngay_ky_hop_dong,
                'email' => $user->email,
                'phan_loai_nv' => $user->phan_loai_nv,
                'luong_thu_viec' => $user->luong_thu_viec,
                'luong_vi_tri_nang_luc' => $user->luong_vi_tri_nang_luc,
                'thuong_kpi' => $user->thuong_kpi,
                'phu_cap_thue_nha' => $user->phu_cap_thue_nha,
                'phu_cap_di_lai' => $user->phu_cap_di_lai,
                'phu_cap_an' => $user->phu_cap_an,
                'phu_cap_dien_thoai' => $user->phu_cap_dien_thoai,
                'cong_tac_phi' => $user->cong_tac_phi,
                'thuong_phong_dich' => $user->thuong_phong_dich,
                'ho_tro_khac' => $user->ho_tro_khac,
                'tong_luong_thoa_thuan' => $user->tong_luong_thoa_thuan,
                'ngay_cong_thuc_te' => $user->ngay_cong_thuc_te,
                'nghi_phep' => $user->nghi_phep,
                'nghi_le' => $user->nghi_le,
                'tong_cong' => $user->tong_cong,
                'luong_theo_ngay_cong' => $user->luong_theo_ngay_cong,
                'luong_200' => $user->luong_200,
                'thuong_kpi_thuc_te' => $user->thuong_kpi_thuc_te,
                'tong_luong_chinh' => $user->tong_luong_chinh,
                'thue_nha' => $user->thue_nha,
                'di_lai' => $user->di_lai,
                'tien_an' => $user->tien_an,
                'dien_thoai' => $user->dien_thoai,
                'cong_tac_phi_thuc_te' => $user->cong_tac_phi_thuc_te,
                'phong_dich' => $user->phong_dich,
                'ho_tro_khac_thuc_te' => $user->ho_tro_khac_thuc_te,
                'tong_phu_cap_tro_cap' => $user->tong_phu_cap_tro_cap,
                'gio_truc_trua' => $user->gio_truc_trua,
                'gio_tang_ca_150' => $user->gio_tang_ca_150,
                'gio_tang_ca_180' => $user->gio_tang_ca_180,
                'gio_tang_ca_300' => $user->gio_tang_ca_300,
                'tong_gio_tang_ca' => $user->tong_gio_tang_ca,
                'tien_truc_trua' => $user->tien_truc_trua,
                'tien_tang_ca_150' => $user->tien_tang_ca_150,
                'tien_tang_ca_180' => $user->tien_tang_ca_180,
                'tien_tang_ca_300' => $user->tien_tang_ca_300,
                'tong_tien_tang_ca' => $user->tong_tien_tang_ca,
                'khoan_bu_tru_khac' => $user->khoan_bu_tru_khac,
                'tong_thu_nhap' => $user->tong_thu_nhap,
                'thu_nhap_chiu_thue' => $user->thu_nhap_chiu_thue,
                'muc_dong' => $user->muc_dong,
                'thu_bao_hiem' => $user->thu_bao_hiem,
                'so_npt' => $user->so_npt,
                'tong_gtgc' => $user->tong_gtgc,
                'tong_cac_khoan_giam_tru' => $user->tong_cac_khoan_giam_tru,
                'thu_nhap_tinh_thue' => $user->thu_nhap_tinh_thue,
                'thue_phai_nop' => $user->thue_phai_nop,
                'doan_phi_nld' => $user->doan_phi_nld,
                'thuc_linh' => $user->thuc_linh,
                'bhxh' => $user->bhxh,
                'doan_phi_cty' => $user->v,
                'tong_phi_cty' => $user->tong_phi_cty,
                'so_tai_khoan' => $user->so_tai_khoan,
            );

            Mail::send('farm', $emailcontent, function ($message) use ($email) {
                $message->from('luong_trai@honghafeed.com.vn', 'Lương nhân viên bộ phận Trại');
                $message->to($email)
                    ->subject('Thông tin lương tháng ' . date('m-Y', strtotime('-1 month')));
            });
        }
        return back()->with('success','Mail đã được gửi thành công');
    }

    /**
     * Import file into database Code
     *
     * @var array
     */
    public function importExcelFarm(Request $request)
    {
        Farm::truncate();
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            //$data = Excel::load($path, function($reader) {})->get();
            $extension = $request->file('import_file')->getClientOriginalExtension();
            $destinationPath = 'upload';
            $fileName = 'Trai' . date('m Y').'.'.$extension; // renameing image
            $request->file('import_file')->move($destinationPath, $fileName);
            //return $fileName;
            $data = Excel::load('public/upload/'.$fileName, function($reader) {})->get();
            //dd($data);
            if(!empty($data) && $data->count()){
                //dd($data->toArray());
                foreach ($data->toArray() as $key => $value) {
                    //dd($value['ngay_vao']);
                    $insert[] = [
                        'stt' => $value['stt'],
                        'code' => $value['code'],
                        'ho_va_ten' => $value['ho_va_ten'],
                        'chuc_vu' => $value['chuc_vu'],
                        'bo_phan' => $value['bo_phan'],
                        //'ngay_vao' => \Carbon\Carbon::createFromFormat('Y-m-d', $value['ngay_vao']),
                        //'ngay_ky_hop_dong' => \Carbon\Carbon::createFromFormat('Y-m-d', $value['ngay_ky_hop_dong']),
                        'ngay_vao' => $value['ngay_vao'],
                        'ngay_ky_hop_dong' => $value['ngay_ky_hop_dong'],
                        'email' => $value['email'],
                        'phan_loai_nv' => $value['phan_loai_nv'],
                        'luong_thu_viec' => $value['luong_thu_viec'],
                        'luong_vi_tri_nang_luc' => $value['luong_vi_tri_nang_luc'],
                        'thuong_kpi' => $value['thuong_kpi'],
                        'phu_cap_thue_nha' => $value['phu_cap_thue_nha'],
                        'phu_cap_di_lai' => $value['phu_cap_di_lai'],
                        'phu_cap_an' => $value['phu_cap_an'],
                        'phu_cap_dien_thoai' => $value['phu_cap_dien_thoai'],
                        'cong_tac_phi' => $value['cong_tac_phi'],
                        'thuong_phong_dich' => $value['thuong_phong_dich'],
                        'ho_tro_khac' => $value['ho_tro_khac'],
                        'tong_luong_thoa_thuan' => $value['tong_luong_thoa_thuan'],
                        'ngay_cong_thuc_te' => $value['ngay_cong_thuc_te'],
                        'nghi_phep' => $value['nghi_phep'],
                        'nghi_le' => $value['nghi_le'],
                        'tong_cong' => $value['tong_cong'],
                        'luong_theo_ngay_cong' => $value['luong_theo_ngay_cong'],
                        'luong_200' => $value['luong_200'],
                        'thuong_kpi_thuc_te' => $value['thuong_kpi_thuc_te'],
                        'tong_luong_chinh' => $value['tong_luong_chinh'],
                        'thue_nha' => $value['thue_nha'],
                        'di_lai' => $value['di_lai'],
                        'tien_an' => $value['tien_an'],
                        'dien_thoai' => $value['dien_thoai'],
                        'cong_tac_phi_thuc_te' => $value['cong_tac_phi_thuc_te'],
                        'phong_dich' => $value['phong_dich'],
                        'ho_tro_khac_thuc_te' => $value['ho_tro_khac_thuc_te'],
                        'tong_phu_cap_tro_cap' => $value['tong_phu_cap_tro_cap'],
                        'gio_truc_trua' => $value['gio_truc_trua'],
                        'gio_tang_ca_150' => $value['gio_tang_ca_150'],
                        'gio_tang_ca_180' => $value['gio_tang_ca_180'],
                        'gio_tang_ca_300' => $value['gio_tang_ca_300'],
                        'tong_gio_tang_ca' => $value['tong_gio_tang_ca'],
                        'tien_truc_trua' => $value['tien_truc_trua'],
                        'tien_tang_ca_150' => $value['tien_tang_ca_150'],
                        'tien_tang_ca_180' => $value['tien_tang_ca_180'],
                        'tien_tang_ca_300' => $value['tien_tang_ca_300'],
                        'tong_tien_tang_ca' => $value['tong_tien_tang_ca'],
                        'khoan_bu_tru_khac' => $value['khoan_bu_tru_khac'],
                        'tong_thu_nhap' => $value['tong_thu_nhap'],
                        'thu_nhap_chiu_thue' => $value['thu_nhap_chiu_thue'],
                        'muc_dong' => $value['muc_dong'],
                        'thu_bao_hiem' => $value['thu_bao_hiem'],
                        'so_npt' => $value['so_npt'],
                        'tong_gtgc' => $value['tong_gtgc'],
                        'tong_cac_khoan_giam_tru' => $value['tong_cac_khoan_giam_tru'],
                        'thu_nhap_tinh_thue' => $value['thu_nhap_tinh_thue'],
                        'thue_phai_nop' => $value['thue_phai_nop'],
                        'doan_phi_nld' => $value['doan_phi_nld'],
                        'thuc_linh' => $value['thuc_linh'],
                        'bhxh' => $value['bhxh'],
                        'doan_phi_cty' =>$value['doan_phi_cty'],
                        'tong_phi_cty' =>$value['tong_phi_cty'],
                        'so_tai_khoan' => $value['so_tai_khoan'],
                    ];
                }


                if(!empty($insert)){
                    Farm::insert($insert);
                    return back()->with('success','Đã import bảng lương thành công.');
                }

            }

        }

        return back()->with('error','Vui lòng kiểm tra file của bạn. Có lỗi xảy ra.');
    }
}
