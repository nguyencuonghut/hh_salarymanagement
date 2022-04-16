<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>

<body>

<style>
    table, td, th {
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
        width: 500px;
    }

    th {
        text-align: left;
    }
</style>
<table>
    <tr bgcolor="yellow">
        <td>Mã nhân viên</td>
        <td>{{ $ma_nhan_vien }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td>Tên nhân viên</td>
        <td>{{ $ho_va_ten }}</td>
    </tr>
    <tr>
        <td>Số ngày công quy định</td>
        <td>{{ number_format($ngay_cong_quy_dinh, 0, '.', ',') }}</td>
    </tr>
    <td>Số ngày công thực tế</td>
    <td>{{ number_format($ngay_cong_thuc_te, 0, '.', ',') }}</td>
    </tr>
    <tr>
        <td>Số ngày công tác phí</td>
        <td>{{ number_format($ngay_cong_tac_phi, 0, '.', ',') }}</td>
    </tr>
    <tr bgcolor="yellow">
        <td><strong>I. Lương và phụ cấp (1)</strong></td>
        <td><strong>{{ number_format($luong_va_phu_cap, 0, '.', '.') . ' ' . 'VNĐ'}}</strong></td>
    </tr>
    <tr>
        <td>Tiền lương thực tế</td>
        <td>{{ number_format($luong_thuc_te, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Tiền Công tác phí</td>
        <td>{{ number_format($tien_cong_tac_phi, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Phụ cấp</td>
        <td>{{ number_format($phu_cap, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Tiền điện thoại cộng/trừ</td>
        <td>{{ number_format($dien_thoai_cong_tru, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>

    <tr>
        <td>Thưởng KPI</td>
        <td>{{ number_format($thuong_kpi, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ hoặc trừ</td>
        <td>{{ number_format($ho_tro_hoac_tru_luong_phu_cap, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>



    <tr bgcolor="yellow">
        <td><strong>II. Thưởng doanh số (2)</strong></td>
        <td><strong>{{ number_format($tong_thuong_doanh_so, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td><i>Doanh số khoán tháng</i></td>
        <td><i>{{ number_format($doanh_so_khoan_thang, 0, '.', '.') . ' ' . 'VNĐ' }}</i></td>
    </tr>
    <tr>
        <td><i>Doanh số thực hiện tháng</i></td>
        <td><i>{{ number_format($doanh_so_thuc_hien_thang, 0, '.', '.') . ' ' . 'VNĐ' }}</i></td>
    </tr>

    <tr>
        <td><i>Doanh số khoán quý</i></td>
        <td><i>{{ number_format($doanh_so_khoan_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</i></td>
    </tr>

    <tr>
        <td><i>Doanh số gốc quý của năm 2021</i></td>
        <td><i>{{ number_format($doanh_so_goc_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</i></td>
    </tr>
    <tr>
        <td><i>Doanh số thực hiện quý</i></td>
        <td><i>{{ number_format($doanh_so_thuc_hien_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</i></td>
    </tr>
    <tr>
        <td><i>Doanh số khoán năm</i></td>
        <td><i>{{ number_format($doanh_so_khoan_nam, 0, '.', '.') . ' ' . 'VNĐ' }}</i></td>
    </tr>
    <tr>
        <td><i>Doanh số thực hiện năm</i></td>
        <td><i>{{ number_format($doanh_so_thuc_hien_nam, 0, '.', '.') . ' ' . 'VNĐ' }}</i></td>
    </tr>
    <tr>
        <td>Thưởng đạt kế hoạch tháng</td>
        <td>{{ number_format($thuong_dat_ke_hoach_thang, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng đạt kế hoạch quý</td>
        <td>{{ number_format($thuong_dat_ke_hoach_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng vượt gốc theo quý</td>
        <td>{{ number_format($thuong_vuot_goc_theo_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng thi đua</td>
        <td>{{ number_format($thuong_thi_dua, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng doanh số năm</td>
        <td>{{ number_format($thuong_doanh_so_nam, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ hoặc trừ thưởng doanh số</td>
        <td>{{ number_format($ho_tro_hoac_tru_thuong_doanh_so, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>


    <tr bgcolor="yellow">
        <td><strong>III. Các khoản giảm trừ (3)</strong></td>
        <td><strong>{{ number_format($cac_khoan_giam_tru, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td>Thuế TNCN</td>
        <td>{{ number_format($thue_tncn, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Bảo hiểm xã hội/BHYT</td>
        <td>{{ number_format($bhxh_bhyt, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>

    <tr>
        <td>Giữ lại lương</td>
        <td>{{ number_format($giu_lai_luong, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>

    <tr bgcolor="yellow" style="color: red">
        <td><strong>IV. Lương còn lĩnh (1) + (2) - (3)</strong></td>
        <td><strong>{{ number_format($luong_con_linh, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
</table>


</body>
</html>