<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;
use Excel;
use Mail;
use \Swift_SmtpTransport;
use \Swift_Mailer;
use \Swift_Plugins_AntiFloodPlugin;
use \Swift_Message;
use \MailTransport;

class FeedController extends Controller
{


    /**
     * Return View file
     *
     * @var array
     */
    public function importExport()
    {
        return view('importExportFeed');
    }

    /**
     * File Export Code
     *
     * @var array
     */
    public function sendfeedmail(Request $request, $type)
    {
        /* Get email address from database */
        //$users = Feed::where('email', '!=', '')->get();
		$users = Feed::where('email', '!=', '')->get();
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
                'cong_tac_phi' => $user->cong_tac_phi,
                'phu_cap' => $user->phu_cap,
                'dien_thoai' => $user->dien_thoai,
                'tra_giu_lai_thuong_sl_do_cong_no_npp_qua_han' => $user->tra_giu_lai_thuong_sl_do_cong_no_npp_qua_han,
                'ho_tro_tru_khac' => $user->ho_tro_tru_khac,
                'thuong_san_luong' => $user->thuong_san_luong,
                'san_luong_ke_hoach' => $user->san_luong_ke_hoach,
                'san_luong_thuc_hien' => $user->san_luong_thuc_hien,
                'ty_le_gia_cam_de_thang_nay' => $user->ty_le_gia_cam_de_thang_nay,
                'ty_le_gia_cam_de_thang_truoc' => $user->ty_le_gia_cam_de_thang_truoc,
                'tang_giam_ty_le_dong_thit' => $user->tang_giam_ty_le_dong_thit,
                'ngan_sach' => $user->ngan_sach,
                /*
                'ty_le_mo_trai_KEY' => $user->ty_le_mo_trai_KEY,
                'ty_le_xay_dung_trai_KEY' => $user->ty_le_xay_dung_trai_KEY,
                */
                'tien_thuong_dat_goc' => $user->tien_thuong_dat_goc,
                'san_luong_n1' => $user->san_luong_n1,
                'san_luong_n2' => $user->san_luong_n2,
                'san_luong_n3' => $user->san_luong_n3,
                'thuong_iomc' => $user->thuong_iomc,
                /*
                'vuot_n1' => $user->vuot_n1,
                'vuot_n2' => $user->vuot_n2,
                'vuot_n3' => $user->vuot_n3,
                'thuong_vuot' => $user->thuong_vuot,
                'thuong_mo_dai_ly_moi' => $user->thuong_mo_dai_ly_moi, // 11-2-2018
                */
                'thuong_quy' => $user->thuong_quy, // 11-2-2018
                'truy_thu_truy_linh_thuong_dat' => $user->truy_thu_truy_linh_thuong_dat, // 11-2-2018
                'thuong_vuot_quy' => $user->thuong_vuot_quy,
                'thuong_khac' => $user->thuong_khac,
                'tru_thuong' => $user->tru_thuong,
                'cac_khoan_giam_tru' => $user->cac_khoan_giam_tru,
                'thue_tncn' => $user->thue_tncn,
                'bhxh' => $user->bhxh,
                'giu_kp_dao_tao_cong_no_npp_qua_han' => $user->giu_kp_dao_tao_cong_no_npp_qua_han,
                'giu_lai_luong' => $user->giu_lai_luong,
                'luong_con_linh' => $user->luong_con_linh,
            );

            Mail::send('feed', $emailcontent, function ($message) use ($email) {
                $message->from('luong_cam@honghafeed.com.vn', 'Lương nhân viên KD Cám');
                $message->to($email)
                    ->subject('Thông tin lương tháng ' . date('m-Y', strtotime('last month')));
            });

            //require_once 'C:\wamp64\www\salarymanagement\vendor\swiftmailer\swiftmailer\lib\swift_required.php';
            //require_once 'C:\wamp64\www\salarymanagement\vendor\swiftmailer\swiftmailer\lib\classes\Swift\Plugins\AntiFloodPlugin.php';
            //C:\wamp64\www\salarymanagement\vendor\swiftmailer\swiftmailer\lib

            //$transport = Swift_MailTransport::newInstance();

            //$transport = Swift_smtpTransport::newInstance( "mail.honghafeed.com.vn" , 587 )
            //    ->setUsername('luong_cam@honghafeed.com.vn')
            //    ->setPassword('Hongha@123');
            //$mailer = Swift_Mailer::newInstance($transport);
            // Create the Mailer using any Transport
            //$mailer = Swift_Mailer::newInstance(
            //    Swift_SmtpTransport::newInstance('mail.honghafeed.com.vn', 25)
            //);

            // Use AntiFlood to re-connect after 100 emails
            //$mailer->registerPlugin(new Swift_Plugins_AntiFloodPlugin(100));

            // And specify a time in seconds to pause for (30 secs)
            //$mailer->registerPlugin(new Swift_Plugins_AntiFloodPlugin(100, 30));
            //$message = Swift_Message::newInstance();
            //$message->setTo($email);
            //$message->setSubject("This email is sent using Swift Mailer");
            //$message->setBody("You're our best client ever.");
            //$message->setFrom("luong_cam@honghafeed.com.vn", "Lương cám");
            //$mailer->send($message);
            //if($user->stt == 100)
            //{
            //    $transport->stop();
            //    $transport->start();
            //}
            //$mailer->send('feed', $emailcontent, function ($message) use ($email) {
            //    $message->from('luong_cam@honghafeed.com.vn', 'Lương nhân viên KD Cám');
            //    $message->to($email)
            //        ->subject('Thông tin lương tháng ' . date('m Y'));
            //});



            //echo 'Mail đã gửi được: ' . $user->stt;
        }
        return back()->with('success','Mail đã được gửi thành công');
    }

    /**
     * Import file into database Code
     *
     * @var array
     */
    public function importExcelFeed(Request $request)
    {
        Feed::truncate();
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            //$data = Excel::load($path, function($reader) {})->get();
            $extension = $request->file('import_file')->getClientOriginalExtension();
            $destinationPath = 'upload';
            $fileName = 'Cam' . date('m Y').'.'.$extension; // renameing image
            $request->file('import_file')->move($destinationPath, $fileName);
            //return $fileName;
            $data = Excel::load('public/upload/'.$fileName, function($reader) {})->get();

            if(!empty($data) && $data->count()){
                //dd($data->toArray());
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
                        'cong_tac_phi' => $value['cong_tac_phi'],
                        'phu_cap' => $value['phu_cap'],
                        'dien_thoai' => $value['dien_thoai'],
                        'tra_giu_lai_thuong_sl_do_cong_no_npp_qua_han' => $value['tra_giu_lai_thuong_sl_do_cong_no_npp_qua_han'],
                        'ho_tro_tru_khac' => $value['ho_tro_tru_khac'],
                        'thuong_san_luong' => $value['thuong_san_luong'],
                        'san_luong_ke_hoach' => $value['san_luong_ke_hoach'],
                        'san_luong_thuc_hien' => $value['san_luong_thuc_hien'],
                        'ty_le_gia_cam_de_thang_nay' => $value['ty_le_gia_cam_de_thang_nay'],
                        'ty_le_gia_cam_de_thang_truoc' => $value['ty_le_gia_cam_de_thang_truoc'],
                        'tang_giam_ty_le_dong_thit' => $value['tang_giam_ty_le_dong_thit'],
                        'ngan_sach' => $value['ngan_sach'],
                        /*
                        'ty_le_mo_trai_KEY' => $value['ty_le_mo_trai_key'],
                        'ty_le_xay_dung_trai_KEY' => $value['ty_le_xay_dung_trai_key'],
                        */
                        'tien_thuong_dat_goc' => $value['tien_thuong_dat_goc'],
                        'san_luong_n1' => $value['san_luong_n1'],
                        'san_luong_n2' => $value['san_luong_n2'],
                        'san_luong_n3' => $value['san_luong_n3'],
                        'thuong_iomc' => $value['thuong_iomc'],
                        /*
                        'vuot_n1' => $value['vuot_n1'],
                        'vuot_n2' => $value['vuot_n2'],
                        'vuot_n3' => $value['vuot_n3'],
                        'thuong_vuot' => $value['thuong_vuot'],
                        'thuong_mo_dai_ly_moi' => $value['thuong_mo_dai_ly_moi'], // 11-2-2018
                        */
                        'thuong_quy' => $value['thuong_quy'], // 11-2-2018
                        'truy_thu_truy_linh_thuong_dat' => $value['truy_thu_truy_linh_thuong_dat'], // 11-2-2018
                        'thuong_vuot_quy' => $value['thuong_vuot_quy'],
                        'thuong_khac' => $value['thuong_khac'],
                        'tru_thuong' => $value['tru_thuong'],
                        'cac_khoan_giam_tru' => $value['cac_khoan_giam_tru'],
                        'thue_tncn' => $value['thue_tncn'],
                        'bhxh' => $value['bhxh'],
                        'giu_kp_dao_tao_cong_no_npp_qua_han' => $value['giu_kp_dao_tao_cong_no_npp_qua_han'],
                        'giu_lai_luong' => $value['giu_lai_luong'],
                        'luong_con_linh' => $value['luong_con_linh'],
                    ];
                }


                if(!empty($insert)){
                    Feed::insert($insert);
                    return back()->with('success','Đã import bảng lương thành công.');
                }

            }

        }

        return back()->with('error','Vui lòng kiểm tra file của bạn. Có lỗi xảy ra.');
    }
}
