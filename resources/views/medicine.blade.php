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
    <tr>
        <td>Mã nhân viên</td>
        <td>{{ $ma_nhan_vien }}</td>
    </tr>
    <tr>
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
    <tr>
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
        <td>Trả Kinh phí đào tạo</td>
        <td>{{ number_format($tra_kp_dao_tao, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng KPI</td>
        <td>{{ number_format($thuong_kpi, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ hoặc trừ</td>
        <td>{{ number_format($ho_tro_hoac_tru_luong_phu_cap, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>



    <tr>
        <td><strong>II. Thưởng doanh số (2)</strong></td>
        <td><strong>{{ number_format($tong_thuong_doanh_so, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td>Doanh số khoán tháng</td>
        <td>{{ number_format($doanh_so_khoan_thang, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Doanh số thực hiện tháng</td>
        <td>{{ number_format($doanh_so_thuc_hien_thang, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng doanh số tháng</td>
        <td>{{ number_format($thuong_ds_thang, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Doanh số thực hiện đến ngày 20</td>
        <td>{{ number_format($doanh_so_thuc_hien_den_ngay_20, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng thêm 20%</td>
        <td>{{ number_format($thuong_them_20_phan_tram, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Doanh số khoán Quý</td>
        <td>{{ number_format($doanh_so_khoan_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Doanh số Quý gốc 2016</td>
        <td>{{ number_format($doanh_so_quy_goc_2016, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Doanh số thực hiện Quý</td>
        <td>{{ number_format($doanh_so_thuc_hien_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng vượt doanh số Quý</td>
        <td>{{ number_format($thuong_vuot_doanh_so_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Doanh số khoán Năm</td>
        <td>{{ number_format($doanh_so_khoan_nam, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Doanh số thực hiện Năm</td>
        <td>{{ number_format($doanh_so_thuc_hien_nam, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng doanh số Năm</td>
        <td>{{ number_format($thuong_doanh_so_nam, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ hoặc trừ thưởng doanh số</td>
        <td>{{ number_format($ho_tro_hoac_tru_thuong_doanh_so, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>


    <tr>
        <td><strong>III. Các khoản giảm trừ (3)</strong></td>
        <td><strong>{{ number_format($cac_khoan_giam_tru, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td>Thuế TNCN</td>
        <td>{{ number_format($thue_tncn, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Bảo hiểm xã hội</td>
        <td>{{ number_format($bhxh, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Kinh phí đào tạo</td>
        <td>{{ number_format($thu_kp_dao_tao, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Giữ lại lương</td>
        <td>{{ number_format($giu_lai_luong, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Trừ 30% công tác phí</td>
        <td>{{ number_format($tru_cong_tac_phi, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>

    <tr>
        <td><strong>IV. Lương còn lĩnh (1) + (2) - (3)</strong></td>
        <td><strong>{{ number_format($luong_con_linh, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
</table>


</body>
</html>