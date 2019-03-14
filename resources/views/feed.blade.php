<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>

<br>

<style>
    table, td, th {
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
        width: 600px;
    }

    th {
        text-align: left;
    }
</style>
<p>
    K/g Anh, Chị,
</p>
<p>
    Phòng Kế toán gửi Anh, Chị Bảng lương tháng {{date('m', strtotime('last month'))}} và thưởng sản lượng tháng {{date('m', strtotime('-2 month'))}}.
</p>
<p style="margin-left: 10px">
    -	&emsp;Mọi thắc mắc về <strong>số liệu</strong> tính lương/thưởng Anh, Chị vui lòng phản hồi lại cho phòng Kế toán theo địa chỉ email: <strong>luong_cam@honghafeed.com.vn</strong>  (không trao đổi lương/thưởng qua điện thoại) trong <strong>năm (5) ngày làm việc</strong> kể từ khi nhận được cuống lương.<br>
    -	&emsp;Phòng kế toán giải đáp thắc mắc của Anh, Chị trong vòng <strong>hai (2) ngày làm việc</strong> kể từ khi nhận được email phản hồi.<br>
    -	&emsp;<strong>Quá thời gian 5 ngày làm việc</strong> nêu trên Phòng kế toán sẽ <strong>không trả lời</strong> bất cứ câu hỏi nào liên quan đến lương/thưởng của Anh, Chị!
</p>
<p>
    Những vướng mắc về <strong>chính sách lương</strong> Anh, Chị vui lòng liên hệ với <strong>Phòng hành chính</strong>.<br>
    Phòng hành chính sẽ giải thích cho Anh, Chị về các chính sách lương/thưởng cho từng cá nhân.
</p>
<p>
    Trân trọng,

</p>
<table>
    <tr bgcolor="yellow">
        <td><strong>Mã nhân viên</strong></td>
        <td><strong>{{ $ma_nhan_vien }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Tên nhân viên</strong></td>
        <td><strong>{{ $ho_va_ten }}</strong></td>
    </tr>
    <tr>
        <td>Số ngày công quy định</td>
        <td align="right">{{ number_format($ngay_cong_quy_dinh, 0, '.', ',') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <td>Số ngày công thực tế</td>
    <td align="right">{{ number_format($ngay_cong_thuc_te, 0, '.', ',') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td>Số ngày công tác phí</td>
        <td align="right">{{ number_format($ngay_cong_tac_phi, 0, '.', ',') }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>I. Lương và phụ cấp (1)</strong></td>
        <td align="right"><strong>{{ number_format($luong_va_phu_cap, 0, '.', '.') . ' ' . 'VNĐ'}}</strong></td>
    </tr>
    <tr>
        <td>Tiền lương thực tế</td>
        <td align="right">{{ number_format($luong_thuc_te, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Tiền Công tác phí</td>
        <td align="right">{{ number_format($cong_tac_phi, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Phụ cấp</td>
        <td align="right">{{ number_format($phu_cap, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Tiền điện thoại (cộng/trừ)</td>
        <td align="right">{{ number_format($dien_thoai, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Trả khoản giữ lại công nợ NPP quá hạn/ trả khác</td>
        <td align="right">{{ number_format($tra_giu_qua_han_npp, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ/trừ khác</td>
        <td align="right">{{ number_format($ho_tro_tru_khac, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>



    <tr bgcolor="yellow">
        <td><strong>II. Thưởng sản lượng (2)</strong></td>
        <td align="right"><strong>{{ number_format($thuong_san_luong, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Kế hoạch tổng sản lượng</i></td>
        <td align="right">{{ number_format($san_luong_ke_hoach, 0, '.', '.') . ' ' . 'KG' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Kế hoạch dòng thịt</i></td>
        <td align="right">{{ number_format($san_luong_ke_hoach_dong_thit, 0, '.', '.') . ' ' . 'KG' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Thực hiện tổng sản lượng</i></td>
        <td align="right">{{ number_format($san_luong_thuc_hien, 0, '.', '.') . ' ' . 'KG' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Thực hiện dòng thịt</i></td>
        <td align="right">{{ number_format($san_luong_thuc_hien_dong_thit, 0, '.', '.') . ' ' . 'KG' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Ngân sách sử dụng</i></td>
        <td align="right">{{ number_format($ngan_sach, 2, '.', '.') . ' ' . 'đ/kg' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td><b>Thưởng đạt kế hoạch tháng (tạm ứng 70% tháng)</b></td>
        <td align="right"><b>{{ number_format($tien_thuong_dat_goc, 0, '.', '.') . ' ' . 'VNĐ' }}</b></td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 1</i></td>
        <td align="right">{{ number_format($san_luong_n1, 0, '.', '.') . ' ' . 'KG' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 2</i></td>
        <td align="right">{{ number_format($san_luong_n2, 0, '.', '.') . ' ' . 'KG' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 3</i></td>
        <td align="right">{{ number_format($san_luong_n3, 0, '.', '.') . ' ' . 'KG' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 4</i></td>
        <td align="right">{{ number_format($san_luong_n4, 0, '.', '.') . ' ' . 'KG' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
    <tr>
        <td><strong>Thưởng IOMC</strong></td>
        <td align="right"><strong>{{ number_format($thuong_iomc, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td>Thưởng quý</td>
        <td align="right">{{ number_format($thuong_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Truy thu/truy lĩnh thưởng đạt kế hoạch</td>
        <td align="right">{{ number_format($truy_thu_truy_linh_thuong_dat, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng vượt sản lượng Quý và thưởng vượt 1130S, 2100</td>
        <td align="right">{{ number_format($thuong_vuot_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Truy thu/Truy lĩnh thưởng vượt Quý I, II/2018 và tiền lì xì Tết 2019</td>
        <td align="right">{{ number_format($thuong_khac, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Trừ thưởng</td>
        <td align="right">{{ number_format($tru_thuong, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>


    <tr bgcolor="yellow">
        <td><strong>III. Các khoản giảm trừ (3)</strong></td>
        <td align="right"><strong>{{ number_format($cac_khoan_giam_tru, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td>Thuế TNCN</td>
        <td align="right">{{ number_format($thue_tncn, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Bảo hiểm xã hội/BHYT</td>
        <td align="right">{{ number_format($bhxh, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Giữ lại công nợ NPP quá hạn hoặc giảm trừ khác</td>
        <td align="right">{{ number_format($giu_cong_no_qua_han_npp, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>IV. Giữ lại lương (4)</strong></td>
        <td align="right"><strong>{{ number_format($giu_lai_luong, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>

    <tr bgcolor="yellow">
        <td><strong>V. Lương còn lĩnh (1) + (2) - (3) - (4)</strong></td>
        <td align="right"><strong>{{ number_format($luong_con_linh, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
</table>

</body>
</html>