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
    -	&emsp;Mọi thắc mắc về <strong>số liệu</strong> tính lương/thưởng Anh, Chị vui lòng phản hồi lại cho phòng Kế toán theo địa chỉ email: <strong>luong_nha_may@honghafeed.com.vn</strong>  (không trao đổi lương/thưởng qua điện thoại) trong <strong>năm (5) ngày làm việc</strong> kể từ khi nhận được cuống lương.<br>
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
        <td><strong>Mã NV</strong></td>
        <td><strong>{{ $ma_nhan_vien }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Họ và tên</strong></td>
        <td><strong>{{ $ho_va_ten }}</strong></td>
    </tr>
    <tr>
        <td>Bộ phận</td>
        <td>{{ $bo_phan }}</td>
    </tr>
    <tr>
        <td>Số ngày nghỉ phép</td>
        <td align="right">{{ $ngay_phep }}</td>
    </tr>
    <tr>
        <td>Số công quy định</td>
        <td align="right">{{ $ngay_cong_quy_dinh }}</td>
    </tr>
    <tr>
        <td>Số công thực tế</td>
        <td align="right">{{ $ngay_cong_thuc_te }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>I. Lương cơ bản</strong></td>
        <td align="right"><strong>{{ number_format($luong_cb, 0, ',', ',') }}</strong></td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Lương vị trí</td>
        <td align="right">{{ number_format($luong_vi_tri, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Lương năng lực</td>
        <td align="right">{{ number_format($luong_nang_luc, 0, ',', ',')  }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>II. Tiền phụ cấp</strong></td>
        <td align="right"><strong>{{ number_format($tien_phu_cap, 0, ',', ',') }}</strong></td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Số ngày tính phụ cấp</td>
        <td align="right">{{ $ngay_pc }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Số tiền phụ cấp</td>
        <td align="right">{{ number_format($so_tien_pc, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>III. Lương ngoài giờ</strong></td>
        <td align="right"><strong>{{ number_format($luong_ngoai_gio, 0, ',', ',') }}</strong></td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Ngày công quy đổi</td>
        <td align="right">{{ $cong_ngoai_gio }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Số tiền lương ngoài giờ</td>
        <td align="right">{{ number_format($so_tien_ngoai_gio, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>IV. Tiền công ca 3</strong></td>
        <td align="right"><strong>{{ number_format($tien_cong_ca_3, 0, ',', ',') }}</strong></td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Số công ca 3</td>
        <td align="right">{{ $so_cong_ca_3 }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Phụ cấp 1 ca</td>
        <td align="right">{{ number_format($phu_cap_1_ca, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Số tiền công ca 3</td>
        <td align="right">{{ number_format($so_tien_cong_ca_3, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>V. Tiền KPI</strong></td>
        <td align="right"><strong>{{ number_format($so_tien_kpi, 0, ',', ',') }}</strong></td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Tỷ lệ KPI</td>
        <td align="right">{{ $kpi * 100 . '%'}}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Số tiền KPI được hưởng</td>
        <td align="right">{{ number_format($tien_kpi, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>VI. Thưởng sản lượng/khác</strong></td>
        <td align="right"><strong>{{ number_format($thuong_sl, 0, ',', ',') }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>VII. Hỗ trợ/trừ khác</strong></td>
        <td align="right"><strong>{{ number_format($ho_tro_tru, 0, ',', ',') }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>VIII. Tiền sinh nhật</strong></td>
        <td align="right"><strong>{{ number_format($tien_sinh_nhat, 0, ',', ',') }}</strong></td>
    </tr>
    <tr bgcolor="yellow" style="color:red">
        <td><strong>IX. TỔNG LƯƠNG ĐƯỢC LĨNH</strong></td>
        <td align="right"><strong>{{ number_format($tong_luong, 0, ',', ',') }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>X. Các khoản giảm trừ</strong></td>
        <td align="right"><strong>{{ number_format($cac_khoan_giam_tru, 0, ',', ',') }}</strong></td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Thuế TNCN</td>
        <td align="right">{{ number_format($tncn, 0, ',', ',') }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em">+ Thu BHXH, BHYT, BHTN, KPCĐ (11,5%)</td>
        <td align="right">{{ number_format($bao_hiem, 0, ',', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>XI. SỐ TIỀN CHI TRẢ</strong></td>
        <td align="right"><strong>{{ number_format($thuc_linh, 0, ',', ',') }}</strong></td>
    </tr>
</table>

</body>
</html>