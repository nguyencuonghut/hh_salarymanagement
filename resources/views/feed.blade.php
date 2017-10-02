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
        <td><strong>{{ number_format($cong_tac_phi_phu_cap_tra_kinh_phi_dao_tao, 0, '.', '.') . ' ' . 'VNĐ'}}</strong></td>
    </tr>
    <tr>
        <td>Tiền lương thực tế</td>
        <td>{{ number_format($luong_thuc_te, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Tiền Công tác phí</td>
        <td>{{ number_format($cong_tac_phi, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Phụ cấp</td>
        <td>{{ number_format($phu_cap, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Tiền điện thoại (cộng/trừ)</td>
        <td>{{ number_format($dien_thoai, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Trả Kinh phí đào tạo/thưởng SL (công nợ của NPP)</td>
        <td>{{ number_format($tra_kp_dao_tao, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ/trừ khác</td>
        <td>{{ number_format($ho_tro_tru_khac, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>



    <tr>
        <td><strong>II. Thưởng sản lượng (2)</strong></td>
        <td><strong>{{ number_format($thuong_san_luong, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td>Sản lượng gốc</td>
        <td>{{ number_format($san_luong_goc, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Sản lượng thực hiện</td>
        <td>{{ number_format($san_luong_thuc_hien, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Thưởng đạt gốc tháng</td>
        <td>{{ number_format($tien_thuong_dat_goc, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Thưởng đạt gốc quý</td>
        <td>{{ number_format($tong_luong_linh, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Sản lượng nhóm 1</td>
        <td>{{ number_format($san_luong_n1, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Sản lượng nhóm 2</td>
        <td>{{ number_format($san_luong_n2, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Sản lượng nhóm 3</td>
        <td>{{ number_format($san_luong_n3, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Sản lượng nhóm 4</td>
        <td>{{ number_format($san_luong_n4, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Thưởng IOMC</td>
        <td>{{ number_format($thuong_iomc, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Vượt sản lượng nhóm 1</td>
        <td>{{ number_format($vuot_n1, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Vượt sản lượng nhóm 2</td>
        <td>{{ number_format($vuot_n2, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Vượt sản lượng nhóm 3</td>
        <td>{{ number_format($vuot_n3, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Vượt sản lượng nhóm 4</td>
        <td>{{ number_format($vuot_n4, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Thưởng vượt sản lượng</td>
        <td>{{ number_format($thuong_vuot, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Quyết toán quý</td>
        <td>{{ number_format($quyet_toan_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ hoặc trừ</td>
        <td>{{ number_format($ho_tro_hoac_tru_thuong_sl, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
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
        <td>Kinh phí đào tạo/thưởng SL (công nợ của NPP)</td>
        <td>{{ number_format($kinh_phi_dao_tao, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td><strong>IV. Giữ lại lương (4)</strong></td>
        <td>{{ number_format($giu_lai_luong, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>

    <tr>
        <td><strong>V. Lương còn lĩnh (1) + (2) - (3) - (4)</strong></td>
        <td><strong>{{ number_format($luong_con_linh, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
</table>


<br><td>Mọi thắc mắc vui lòng gửi email về địa chỉ <strong>luong_cam@honghafeed.com.vn</strong></td></br>
</body>
</html>