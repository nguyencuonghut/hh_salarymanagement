<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bun;
use Excel;
use Mail;
use \Swift_SmtpTransport;
use \Swift_Mailer;
use \Swift_Plugins_AntiFloodPlugin;
use \Swift_Message;
use \MailTransport;

class BunController extends Controller
{


    /**
     * Return View file
     *
     * @var array
     */
    public function importExport()
    {
        return view('importExportBun');
    }

    /**
     * Send mail automatically
     *
     * @var array
     */
    public function sendbunmail(Request $request, $type)
    {
		// Setup your luong_trai@honghafeed mailer
		$transport = Swift_SmtpTransport::newInstance(env('MAIL_HOST'), env('MAIL_PORT'), env('MAIL_ENCRYPTION'));
		$transport->setUsername('luong_buntaphan@honghafeed.com.vn');
		$transport->setPassword('Hongha@#$2021');

		$bun_mailer = new Swift_Mailer($transport);
		//dd($bun_mailer);
		// Set the mailer as bun_mailer
		Mail::setSwiftMailer($bun_mailer);

		
		
		
        /* Get email address from database */
		$users = Bun::where('email', '!=', '')->get();
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
                        'cong_thuc_te' => $user->cong_thuc_te,
                        'nghi_phep' => $user->nghi_phep,
                        'ca_dem' => $user->ca_dem,
                        'dm_vs' => $user->dm_vs,
                        'ngay_le' => $user->ngay_le,
                        'tang_ca' => $user->tang_ca,
                        'ngay_khong_cham_cong_van_tinh_tro_cap' => $user->ngay_khong_cham_cong_van_tinh_tro_cap,
                        'so_lan_ra_trai' => $user->so_lan_ra_trai,
                        'hd_luong_cung' => $user->hd_luong_cung,
                        'hd_phu_cap' => $user->hd_phu_cap,
                        'hd_tong_luong' => $user->hd_tong_luong,
                        'hd_tro_cap_o_trai' => $user->hd_tro_cap_o_trai,
                        'hd_trach_nhiem' => $user->hd_trach_nhiem,
                        'tt_luong_cung' => $user->tt_luong_cung,
                        'tt_phu_cap' => $user->tt_phu_cap,
                        'tt_lam_dem' => $user->tt_lam_dem,
                        'tt_tang_ca_le' => $user->tt_tang_ca_le,
                        'tt_tru_tien_dm_vs' => $user->tt_tru_tien_dm_vs,
                        'tt_tong_luong' => $user->tt_tong_luong,
                        'tc_o_trai' => $user->tc_o_trai,
                        'tc_trach_nhiem' => $user->tc_trach_nhiem,
                        'tc_truc_tet' => $user->tc_truc_tet,
                        'thuong' => $user->thuong,
                        'cac_khoan_bu_tru' => $user->cac_khoan_bu_tru,
                        'tong_thu_nhap' => $user->tong_thu_nhap,
                        'thu_nhap_chiu_thue' => $user->thu_nhap_chiu_thue,
                        'bao_hiem' => $user->bao_hiem,
                        'tang_ca_khong_chiu_thue' => $user->tang_ca_khong_chiu_thue,
                        'tong_gtgc' => $user->tong_gtgc,
                        'thu_nhap_tinh_thue' => $user->thu_nhap_tinh_thue,
                        'thue_phai_nop' => $user->thue_phai_nop,
                        'luong_da_ung' => $user->luong_da_ung,
                        'tru_bhyt' => $user->tru_bhyt,
                        'so_tien_chi_tra' => $user->so_tien_chi_tra,
                        'hinh_thuc_thanh_toan' => $user->hinh_thuc_thanh_toan,
                        'email' => $user->email,
            );

            Mail::send('bun', $emailcontent, function ($message) use ($email) {
                $message->from('luong_buntaphan@honghafeed.com.vn', 'Lương nhân viên công ty cổ phần Buntaphan');
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
    public function importExcelBun(Request $request)
    {
        Bun::truncate();
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            //$data = Excel::load($path, function($reader) {})->get();
            $extension = $request->file('import_file')->getClientOriginalExtension();
            $destinationPath = 'upload';
            $fileName = 'Bun' . date('m Y').'.'.$extension; // renameing image
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
                        'cong_thuc_te' => $value['cong_thuc_te'],
                        'nghi_phep' => $value['nghi_phep'],
                        'ca_dem' => $value['ca_dem'],
                        'dm_vs' => $value['dm_vs'],
                        'ngay_le' => $value['ngay_le'],
                        'tang_ca' => $value['tang_ca'],
                        'ngay_khong_cham_cong_van_tinh_tro_cap' => $value['ngay_khong_cham_cong_van_tinh_tro_cap'],
                        'so_lan_ra_trai' => $value['so_lan_ra_trai'],
                        'hd_luong_cung' => $value['hd_luong_cung'],
                        'hd_phu_cap' => $value['hd_phu_cap'],
                        'hd_tong_luong' => $value['hd_tong_luong'],
                        'hd_tro_cap_o_trai' => $value['hd_tro_cap_o_trai'],
                        'hd_trach_nhiem' => $value['hd_trach_nhiem'],
                        'tt_luong_cung' => $value['tt_luong_cung'],
                        'tt_phu_cap' => $value['tt_phu_cap'],
                        'tt_lam_dem' => $value['tt_lam_dem'],
                        'tt_tang_ca_le' => $value['tt_tang_ca_le'],
                        'tt_tru_tien_dm_vs' => $value['tt_tru_tien_dm_vs'],
                        'tt_tong_luong' => $value['tt_tong_luong'],
                        'tc_o_trai' => $value['tc_o_trai'],
                        'tc_trach_nhiem' => $value['tc_trach_nhiem'],
                        'tc_truc_tet' => $value['tc_truc_tet'],
                        'thuong' => $value['thuong'],
                        'cac_khoan_bu_tru' => $value['cac_khoan_bu_tru'],
                        'tong_thu_nhap' => $value['tong_thu_nhap'],
                        'thu_nhap_chiu_thue' => $value['thu_nhap_chiu_thue'],
                        'bao_hiem' => $value['bao_hiem'],
                        'tang_ca_khong_chiu_thue' => $value['tang_ca_khong_chiu_thue'],
                        'tong_gtgc' => $value['tong_gtgc'],
                        'thu_nhap_tinh_thue' => $value['thu_nhap_tinh_thue'],
                        'thue_phai_nop' => $value['thue_phai_nop'],
                        'luong_da_ung' => $value['luong_da_ung'],
                        'tru_bhyt' => $value['tru_bhyt'],
                        'so_tien_chi_tra' => $value['so_tien_chi_tra'],
                        'hinh_thuc_thanh_toan' => $value['hinh_thuc_thanh_toan'],
                        'email' => $value['email'],
                    ];
                }


                if(!empty($insert)){
                    Bun::insert($insert);
                    return back()->with('success','Đã import bảng lương thành công.');
                }

            }

        }

        return back()->with('error','Vui lòng kiểm tra file của bạn. Có lỗi xảy ra.');
    }
}
