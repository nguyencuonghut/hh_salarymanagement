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
    Phòng Kế toán gửi Anh, Chị Bảng lương tháng {{date('m', strtotime('-1 month'))}}.
</p>
<p style="margin-left: 10px">
    -	&emsp;Mọi thắc mắc về <strong>số liệu</strong> tính lương/thưởng Anh, Chị vui lòng phản hồi lại cho phòng Kế toán theo địa chỉ email: <strong>luong_buntaphan@honghafeed.com.vn</strong>  (không trao đổi lương/thưởng qua điện thoại) trong <strong>năm (5) ngày làm việc</strong> kể từ khi nhận được cuống lương.<br>
    -	&emsp;Phòng kế toán giải đáp thắc mắc của Anh, Chị trong vòng <strong>hai (2) ngày làm việc</strong> kể từ khi nhận được email phản hồi.<br>
    -	&emsp;<strong>Quá thời gian 5 ngày làm việc</strong> nêu trên Phòng kế toán sẽ <strong>không trả lời</strong> bất cứ câu hỏi nào liên quan đến lương/thưởng của Anh, Chị!
</p>
<p>
    Những vướng mắc về <strong>chính sách lương</strong> Anh, Chị vui lòng liên hệ với <strong>Phòng Nhân Sự</strong>.<br>
    Phòng Nhân Sự sẽ giải thích cho Anh, Chị về các chính sách lương/thưởng cho từng cá nhân.
</p>
<p>
    Trân trọng,

</p>
<table>
    <tr bgcolor="yellow">
        <td><strong>Họ và tên</strong></td>
        <td><strong>{{ $ho_va_ten }}</strong></td>
    </tr>
    <tr>
        <td>Mã nhân viên</td>
        <td>{{ $code }}</td>
    </tr>
    <tr>
        <td>Chức vụ</td>
        <td>{{ $chuc_vu }}</td>
    </tr>
    <tr>
        <td>Ngày công thực tế</td>
        <td>{{ $cong_thuc_te }}</td>
    </tr>
    <tr>
        <td>Nghỉ phép</td>
        <td>{{ $nghi_phep }}</td>
    </tr>
    <tr>
        <td>Ca đêm</td>
        <td>{{ $ca_dem }}</td>
    </tr>
    <tr>
        <td>Ngày lễ</td>
        <td>{{ $ngay_le }}</td>
    </tr>
    <tr>
        <td>Tăng ca</td>
        <td>{{ $tang_ca }}</td>
    </tr>
    <tr>
        <td><strong>Lương thỏa thuận (lương cứng + phụ cấp)</td>
        <td><strong>{{ number_format($hd_tong_luong, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td><strong>Trợ cấp ở trại</td>
        <td><strong>{{ number_format($hd_tro_cap_o_trai, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td><strong>Trách nhiệm</td>
        <td><strong>{{ number_format($hd_trach_nhiem, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Lương, phụ cấp (1)</td>
        <td><strong>{{ number_format($tt_luong_cung + $tt_phu_cap + $tt_lam_dem + $tt_tang_ca_le + $tc_o_trai + $tc_trach_nhiem + $tc_truc_tet, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Lương cứng</td>
        <td align="right">{{ number_format($tt_luong_cung, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Lương phụ cấp</td>
        <td align="right">{{ number_format($tt_phu_cap, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Lương làm đêm</td>
        <td align="right">{{ number_format($tt_lam_dem, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Lương tăng ca, lễ</td>
        <td align="right">{{ number_format($tt_tang_ca_le, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Lương trợ cấp</td>
        <td align="right">{{ number_format($tc_o_trai, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Lương trách nhiệm</td>
        <td align="right">{{ number_format($tc_trach_nhiem, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Hỗ trợ trực tết</td>
        <td align="right">{{ number_format($tc_truc_tet, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Thưởng (2)</td>
        <td><strong>{{ number_format($thuong, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Khoản bổ sung (nếu có) (3)</td>
        <td><strong>{{ number_format($cac_khoan_bu_tru, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Các khoản giảm trừ (4)</td>
        <td><strong>{{ number_format($tt_tru_tien_dm_vs + $bao_hiem + $thue_phai_nop + $luong_da_ung + $tru_bhyt, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Trừ đi muộn, về sớm</td>
        <td align="right">{{ number_format($tt_tru_tien_dm_vs, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Phí BHXH</td>
        <td align="right">{{ number_format($bao_hiem, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Thu nhập tính thuế</td>
        <td align="right">{{ number_format($thu_nhap_tinh_thue, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Thuế TNCN</td>
        <td align="right">{{ number_format($thue_phai_nop, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Lương đã ứng</td>
        <td align="right">{{ number_format($luong_da_ung, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">Trừ BHYT</td>
        <td align="right">{{ number_format($tru_bhyt, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Lương thực nhận (1) + (2) + (3) - (4)</td>
        <td><strong>{{ number_format($tt_luong_cung + $tt_phu_cap + $tt_lam_dem + $tt_tang_ca_le + $tc_o_trai + $tc_trach_nhiem + $tc_truc_tet + $thuong + $cac_khoan_bu_tru - $tt_tru_tien_dm_vs - $bao_hiem - $thu_nhap_tinh_thue - $luong_da_ung - $tru_bhyt, 0, ',', ',') }}</td>
    </tr>
</table>

</body>
</html>