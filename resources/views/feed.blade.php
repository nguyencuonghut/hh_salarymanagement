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
<p>
    K/g Anh, Chị,
</p>
<p>
    Phòng Kế toán gửi Anh, Chị Bảng lương tháng {{date('m', strtotime('last month'))}} và thưởng sản lượng tháng {{date('m', strtotime('last month')) - 1}}.
</p>
<p style="text-indent: 2em">
    -	Mọi thắc mắc về <strong>số liệu</strong> tính lương/thưởng Anh, Chị vui lòng phản hồi lại cho phòng Kế toán theo địa chỉ email: <strong>luong_cam@honghafeed.com.vn</strong>  (không trao đổi lương/thưởng qua điện thoại) trong <strong>năm (5) ngày làm việc</strong> kể từ khi nhận được cuống lương.
</p>
<p style="text-indent: 2em">
    -	Phòng kế toán giải đáp thắc mắc của Anh, Chị trong vòng <strong>hai (2) ngày làm việc</strong> kể từ khi nhận được email phản hồi.
</p>
<p style="text-indent: 2em">
    -	<strong>Quá thời gian 5 ngày làm việc</strong> nêu trên Phòng kế toán sẽ <strong>không trả lời</strong> bất cứ câu hỏi nào liên quan đến lương/thưởng của Anh, Chị!
</p>
<p>
    Những vướng mắc về <strong>chính sách lương</strong> Anh, Chị vui lòng liên hệ với <strong>Phòng hành chính</strong>.<br>
    Phòng hành chính sẽ giải thích cho Anh, Chị về các chính sách lương/thưởng cho từng cá nhân.
</p>
<p>
    Trân trọng,

</p>
<table>
    <tr>
        <td>Mã nhân viên</td>
        <td><strong>{{ $ma_nhan_vien }}</strong></td>
    </tr>
    <tr>
        <td>Tên nhân viên</td>
        <td><strong>{{ $ho_va_ten }}</strong></td>
    </tr>
    <tr>
        <td>Số ngày công quy định</td>
        <td align="right">{{ number_format($ngay_cong_quy_dinh, 0, '.', ',') }}</td>
    </tr>
    <td>Số ngày công thực tế</td>
    <td align="right">{{ number_format($ngay_cong_thuc_te, 0, '.', ',') }}</td>
    </tr>
    <tr>
        <td>Số ngày công tác phí</td>
        <td align="right">{{ number_format($ngay_cong_tac_phi, 0, '.', ',') }}</td>
    </tr>
    <tr>
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
        <td>Trả kinh phí đào tạo/Công nợ quá hạn NPP/Khác</td>
        <td align="right">{{ number_format($tra_kp_dao_tao_tra_giu_lai_thuong_sl_do_cong_no_npp_qua_han, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ/trừ khác</td>
        <td align="right">{{ number_format($ho_tro_tru_khac, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>



    <tr>
        <td><strong>II. Thưởng sản lượng (2)</strong></td>
        <td align="right"><strong>{{ number_format($thuong_san_luong, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng gốc/Kế hoạch</i></td>
        <td>{{ number_format($san_luong_goc, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng thực hiện</i></td>
        <td>{{ number_format($san_luong_thuc_hien, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Tỷ lệ gia cầm đẻ tháng này</i></td>
        <td>{{ number_format($ty_le_gia_cam_de_thang_nay, 0, '.', '.') . ' ' . '%' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Tỷ lệ gia cầm đẻ tháng trước</i></td>
        <td>{{ number_format($ty_le_gia_cam_de_thang_truoc, 0, '.', '.') . ' ' . '%' }}</td>
    </tr>
    <tr>
        <td>Thưởng đạt gốc tháng</td>
        <td align="right">{{ number_format($tien_thuong_dat_goc, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 1</i></td>
        <td>{{ number_format($san_luong_n1, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 2</i></td>
        <td>{{ number_format($san_luong_n2, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 3</i></td>
        <td>{{ number_format($san_luong_n3, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 4</i></td>
        <td>{{ number_format($san_luong_n4, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Sản lượng nhóm 5</i></td>
        <td>{{ number_format($san_luong_n5, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Thưởng IOMC</td>
        <td align="right">{{ number_format($thuong_iomc, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Vượt sản lượng nhóm 1</i></td>
        <td>{{ number_format($vuot_n1, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Vượt sản lượng nhóm 2</i></td>
        <td>{{ number_format($vuot_n2, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Vượt sản lượng nhóm 3</i></td>
        <td>{{ number_format($vuot_n3, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Vượt sản lượng nhóm 4</i></td>
        <td>{{ number_format($vuot_n4, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td style="text-indent: 2em"><i>Vượt sản lượng nhóm 5</i></td>
        <td>{{ number_format($vuot_n5, 0, '.', '.') . ' ' . 'KG' }}</td>
    </tr>
    <tr>
        <td>Thưởng vượt sản lượng</td>
        <td align="right">{{ number_format($thuong_vuot, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Quyết toán quý</td>
        <td align="right">{{ number_format($quyet_toan_quy, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td>Hỗ trợ hoặc trừ</td>
        <td align="right">{{ number_format($ho_tro_hoac_tru_thuong_sl, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>


    <tr>
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
        <td>Công nợ NPP quá hạn/các khoản khác</td>
        <td align="right">{{ number_format($giu_kp_dao_tao_cong_no_npp_qua_han, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>
    <tr>
        <td><strong>IV. Giữ lại lương (4)</strong></td>
        <td align="right">{{ number_format($giu_lai_luong, 0, '.', '.') . ' ' . 'VNĐ' }}</td>
    </tr>

    <tr>
        <td><strong>V. Lương còn lĩnh (1) + (2) - (3) - (4)</strong></td>
        <td align="right"><strong>{{ number_format($luong_con_linh, 0, '.', '.') . ' ' . 'VNĐ' }}</strong></td>
    </tr>
</table>

</body>
</html>