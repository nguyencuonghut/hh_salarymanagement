<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factory;
use Excel;
use Mail;
use \Swift_SmtpTransport;
use \Swift_Mailer;
use \Swift_Plugins_AntiFloodPlugin;
use \Swift_Message;
use \MailTransport;

class FactoryController extends Controller
{


    /**
     * Return View file
     *
     * @var array
     */
    public function importExport()
    {
        return view('importExportFactory');
    }

    /**
     * Send mail automatically
     *
     * @var array
     */
    public function sendfactorymail(Request $request, $type)
    {
		// Setup your luong_nha_may@honghafeed mailer
		$transport = Swift_SmtpTransport::newInstance(env('MAIL_HOST'), env('MAIL_PORT'), env('MAIL_ENCRYPTION'));
		$transport->setUsername('luong_nha_may@honghafeed.com.vn');
		$transport->setPassword('Hongha@123');

		$factory_mailer = new Swift_Mailer($transport);
		//dd($factory_mailer);
		// Set the mailer as factory_mailer
		Mail::setSwiftMailer($factory_mailer);

		
		
		
        /* Get email address from database */
        //$users = Factory::where('email', '!=', '')->get();
		$users = Factory::where('email', '!=', '')->get();
        ini_set('max_execution_time', 0);

        foreach ($users as $user)
        {
            $email = $user->email;
            //echo $user->ten_nhan_vien;
            /* Create message content */
            $emailcontent = array(
                'ma_nhan_vien' => $user->ma_nhan_vien,
                'ho_va_ten' => $user->ho_va_ten,
                'bo_phan' => $user->bo_phan,
                'ngay_phep' => $user->ngay_phep,
                'ngay_cong_quy_dinh' => $user->ngay_cong_quy_dinh,
                'ngay_cong_thuc_te' => $user->ngay_cong_thuc_te,
                'luong_cb' => $user->luong_cb,
                'luong_vi_tri' => $user->luong_vi_tri,
                'luong_nang_luc' => $user->luong_nang_luc,
                'tien_phu_cap' => $user->tien_phu_cap,
                'ngay_pc' => $user->ngay_pc,
                'so_tien_pc' => $user->so_tien_pc,
                'luong_ngoai_gio' => $user->luong_ngoai_gio,
                'cong_ngoai_gio' => $user->cong_ngoai_gio,
                'so_tien_ngoai_gio' => $user->so_tien_ngoai_gio,
                'tien_cong_ca_3' => $user->tien_cong_ca_3,
                'so_cong_ca_3' => $user->so_cong_ca_3,
                'phu_cap_1_ca' => $user->phu_cap_1_ca,
                'so_tien_cong_ca_3' => $user->so_tien_cong_ca_3,
                'so_tien_kpi' => $user->so_tien_kpi,
                'kpi' => $user->kpi,
                'tien_kpi' => $user->tien_kpi,
                'thuong_sl' => $user->thuong_sl,
                'ho_tro_tru' => $user->ho_tro_tru,
                'tong_luong' => $user->tong_luong,
                'cac_khoan_giam_tru' => $user->cac_khoan_giam_tru,
                'tncn' => $user->tncn,
                'bao_hiem' => $user->bao_hiem,
                'thuc_linh' => $user->thuc_linh,
            );

            Mail::send('factory', $emailcontent, function ($message) use ($email) {
                $message->from('luong_nha_may@honghafeed.com.vn', 'Lương nhân viên nhà máy');
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
    public function importExcelFactory(Request $request)
    {
        Factory::truncate();
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            //$data = Excel::load($path, function($reader) {})->get();
            $extension = $request->file('import_file')->getClientOriginalExtension();
            $destinationPath = 'upload';
            $fileName = 'NhaMay' . date('m Y').'.'.$extension; // renameing image
            $request->file('import_file')->move($destinationPath, $fileName);
            //return $fileName;
            $data = Excel::load('public/upload/'.$fileName, function($reader) {})->get();

            if(!empty($data) && $data->count()){
                //dd($data->toArray());
                foreach ($data->toArray() as $key => $value) {
                    $insert[] = [
                        'stt' => $value['stt'],
                        'ma_nhan_vien' => $value['ma_nhan_vien'],
                        'ho_va_ten' => $value['ho_va_ten'],
                        'email' => $value['email'],
                        'bo_phan' => $value['bo_phan'],
                        'ngay_phep' => $value['ngay_phep'],
                        'ngay_cong_quy_dinh' => $value['ngay_cong_quy_dinh'],
                        'ngay_cong_thuc_te' => $value['ngay_cong_thuc_te'],
                        'luong_cb' => $value['luong_cb'],
                        'luong_vi_tri' => $value['luong_vi_tri'],
                        'luong_nang_luc' => $value['luong_nang_luc'],
                        'tien_phu_cap' => $value['tien_phu_cap'],
                        'ngay_pc' => $value['ngay_pc'],
                        'so_tien_pc' => $value['so_tien_pc'],
                        'luong_ngoai_gio' => $value['luong_ngoai_gio'],
                        'cong_ngoai_gio' => $value['cong_ngoai_gio'],
                        'so_tien_ngoai_gio' => $value['so_tien_ngoai_gio'],
                        'tien_cong_ca_3' => $value['tien_cong_ca_3'],
                        'so_cong_ca_3' => $value['so_cong_ca_3'],
                        'phu_cap_1_ca' => $value['phu_cap_1_ca'],
                        'so_tien_cong_ca_3' => $value['so_tien_cong_ca_3'],
                        'so_tien_kpi' => $value['so_tien_kpi'],
                        'kpi' => $value['kpi'],
                        'tien_kpi' => $value['tien_kpi'],
                        'thuong_sl' => $value['thuong_sl'],
                        'ho_tro_tru' => $value['ho_tro_tru'],
                        'tong_luong' => $value['tong_luong'],
                        'cac_khoan_giam_tru' => $value['cac_khoan_giam_tru'],
                        'tncn' => $value['tncn'],
                        'bao_hiem' => $value['bao_hiem'],
                        'thuc_linh' => $value['thuc_linh'],
                    ];
                }


                if(!empty($insert)){
                    Factory::insert($insert);
                    return back()->with('success','Đã import bảng lương thành công.');
                }

            }

        }

        return back()->with('error','Vui lòng kiểm tra file của bạn. Có lỗi xảy ra.');
    }
}
