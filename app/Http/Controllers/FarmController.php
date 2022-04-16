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
		$transport->setPassword('Hongha@#$2021');

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
                'email' => $user->email,
                'phan_loai_nv' => $user->phan_loai_nv,
                'luong_vi_tri_nang_luc' => $user->luong_vi_tri_nang_luc,
                'thuong_kpi' => $user->thuong_kpi,
                'thuong_nang_suat' => $user->thuong_nang_suat,
                'ngay_cong_thuc_te' => $user->ngay_cong_thuc_te,
                'nghi_phep' => $user->nghi_phep,
                'nghi_le' => $user->nghi_le,
                'truc_tet' => $user->truc_tet,
                'tong_cong' => $user->tong_cong,
                'luong_theo_ngay_cong' => $user->luong_theo_ngay_cong,
                'luong_200' => $user->luong_200,
                'cong_ca_dem' => $user->cong_ca_dem,
                'luong_cong_them' => $user->luong_cong_them,
                'tong_luong_chinh' => $user->tong_luong_chinh,
                'thuong_kpi_thuc_te' => $user->thuong_kpi_thuc_te,
                'tien_thuong_nang_suat' => $user->tien_thuong_nang_suat,
                'tien_thuong_phong_dich' => $user->tien_thuong_phong_dich,
                'tong_phu_cap_tro_cap' => $user->tong_phu_cap_tro_cap,
                'tong_gio_tang_ca' => $user->tong_gio_tang_ca,
                'tong_tien_tang_ca' => $user->tong_tien_tang_ca,
                'khoan_bu_tru_khac' => $user->khoan_bu_tru_khac,
                'tong_thu_nhap' => $user->tong_thu_nhap,
                'thu_nhap_chiu_thue' => $user->thu_nhap_chiu_thue,
                'thu_bao_hiem_cong_doan' => $user->thu_bao_hiem_cong_doan,
                'tong_gtgc' => $user->tong_gtgc,
                'thu_nhap_tinh_thue' => $user->thu_nhap_tinh_thue,
                'thue_phai_nop' => $user->thue_phai_nop,
                'thuc_linh' => $user->thuc_linh,
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
                        'email' => $value['email'],
                        'phan_loai_nv' => $value['phan_loai_nv'],
                        'luong_vi_tri_nang_luc' => $value['luong_vi_tri_nang_luc'],
                        'thuong_kpi' => $value['thuong_kpi'],
                        'thuong_nang_suat' => $value['thuong_nang_suat'],
                        'ngay_cong_thuc_te' => $value['ngay_cong_thuc_te'],
                        'nghi_phep' => $value['nghi_phep'],
                        'nghi_le' => $value['nghi_le'],
                        'truc_tet' => $value['truc_tet'],
                        'tong_cong' => $value['tong_cong'],
                        'luong_theo_ngay_cong' => $value['luong_theo_ngay_cong'],
                        'luong_200' => $value['luong_200'],
                        'cong_ca_dem' => $value['cong_ca_dem'],
                        'luong_cong_them' => $value['luong_cong_them'],
                        'tong_luong_chinh' => $value['tong_luong_chinh'],
                        'thuong_kpi_thuc_te' => $value['thuong_kpi_thuc_te'],
                        'tien_thuong_nang_suat' => $value['tien_thuong_nang_suat'],
                        'tien_thuong_phong_dich' => $value['tien_thuong_phong_dich'],
                        'tong_phu_cap_tro_cap' => $value['tong_phu_cap_tro_cap'],
                        'tong_gio_tang_ca' => $value['tong_gio_tang_ca'],
                        'tong_tien_tang_ca' => $value['tong_tien_tang_ca'],
                        'khoan_bu_tru_khac' => $value['khoan_bu_tru_khac'],
                        'tong_thu_nhap' => $value['tong_thu_nhap'],
                        'thu_nhap_chiu_thue' => $value['thu_nhap_chiu_thue'],
                        'thu_bao_hiem_cong_doan' => $value['thu_bao_hiem_cong_doan'],
                        'tong_gtgc' => $value['tong_gtgc'],
                        'thu_nhap_tinh_thue' => $value['thu_nhap_tinh_thue'],
                        'thue_phai_nop' => $value['thue_phai_nop'],
                        'thuc_linh' => $value['thuc_linh'],
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
