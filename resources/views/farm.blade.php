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
    Phòng Hành Chính Nhân Sự Trại gửi Anh, Chị Bảng lương tháng {{date('m', strtotime('-1 month'))}}.
</p>
<p style="margin-left: 10px">
    -	&emsp;Mọi thắc mắc về <strong>số liệu</strong> tính lương/thưởng Anh, Chị vui lòng phản hồi lại cho phòng Hành Chính Nhân Sự Trại theo địa chỉ email: <strong>luong_trai@honghafeed.com.vn</strong>  (không trao đổi lương/thưởng qua điện thoại) trong <strong>năm (5) ngày làm việc</strong> kể từ khi nhận được cuống lương.<br>
    -	&emsp;Phòng Hành Chính Nhân Sự Trại giải đáp thắc mắc của Anh, Chị trong vòng <strong>hai (2) ngày làm việc</strong> kể từ khi nhận được email phản hồi.<br>
    -	&emsp;<strong>Quá thời gian 5 ngày làm việc</strong> nêu trên Phòng Hành Chính Nhân Sự Trại sẽ <strong>không trả lời</strong> bất cứ câu hỏi nào liên quan đến lương/thưởng của Anh, Chị!
</p>
<p>
    Trân trọng,

</p>
<table>
    <tr bgcolor="yellow">
        <td><strong>Họ và tên</strong></td>
        <td align="right"><strong>{{ $ho_va_ten }}</strong></td>
    </tr>
    <tr>
        <td>Mã NV</td>
        <td align="right">{{ $code }}</td>
    </tr>
    <tr>
        <td>Chức vụ</td>
        <td align="right">{{ $chuc_vu }}</td>
    </tr>
    <tr>
        <td>Bộ phận</td>
        <td align="right">{{ $bo_phan }}</td>
    </tr>
    <tr>
        <td>Ngày vào làm</td>
        <td align="right">{{ $ngay_vao }}</td>
    </tr>
    <tr>
        <td >Ngày ký HĐLĐ</td>
        <td align="right">{{ $ngay_ky_hop_dong }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Lương thỏa thuận (Lương chính + phụ cấp)</strong></td>
        <td align="right"><strong>{{ number_format($tong_luong_thoa_thuan, 0, ',', ',') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td >Ngày công chuẩn</td>
        <td align="right">26 ngày</td>
    </tr>
    <tr>
        <td >Ngày công thực tế</td>
        <td align="right">{{ $ngay_cong_thuc_te }} ngày</td>
    </tr>
    <tr>
        <td >Nghỉ phép</td>
        <td align="right">{{ $nghi_phep }} ngày</td>
    </tr>
    <tr>
        <td >Nghỉ lễ</td>
        <td align="right">{{ $nghi_le }} ngày</td>
    </tr>
    <tr>
        <td >Tổng công</td>
        <td align="right">{{ $tong_cong }} ngày</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Lương chính (1)</strong></td>
        <td align="right"><strong>{{ number_format($tong_luong_chinh, 0, ',', ',') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Tổng phụ cấp (2)</strong></td>
        <td align="right"><strong>{{ number_format($tong_phu_cap_tro_cap, 0, ',', ',') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Lương tăng ca (3)</strong></td>
        <td align="right"><strong>{{ number_format($tong_tien_tang_ca, 0, ',', ',') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td>Thời gian tăng ca</td>
        <td align="right">{{ $tong_gio_tang_ca }} giờ</td>
    </tr>
    <tr>
        <td>Tổng tiền tăng ca</td>
        <td align="right">{{ number_format($tong_tien_tang_ca, 0, ',', ',') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Hỗ trợ/trừ khác (4)</strong></td>
        <td align="right"><strong>{{ number_format($khoan_bu_tru_khac, 0, ',', ',') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Tổng thu nhập (5) = (1) + (2) + (3) + (4)</strong></td>
        <td align="right"><strong>{{ number_format($tong_thu_nhap, 0, ',', ',') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>Các khoản giảm trừ (6)</strong></td>
        <td align="right"><strong>{{ number_format($thu_bao_hiem + $thue_phai_nop + $doan_phi_nld, 0, ',', ',') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td>BHXH</td>
        <td align="right">{{ number_format($thu_bao_hiem, 0, ',', ',') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thuế TNCN</td>
        <td align="right">{{ number_format($thue_phai_nop, 0, ',', ',') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Đoàn phí</td>
        <td align="right">{{ number_format($doan_phi_nld, 0, ',', ',') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr bgcolor="yellow" style="color: red">
        <td><strong>Lương thực lĩnh (5) - (6)</strong></td>
        <td align="right"><strong>{{ number_format($thuc_linh, 0, ',', ',') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
</table>

</body>
</html>