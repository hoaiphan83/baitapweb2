<center>
<table>
<tr> <td width="414" bgcolor="#FF6633" align="center" >
THÔNG TIN ĐẶT TOUR </td> </tr>
<tr> <td>
Khách đã chọn Tour:<strong> <?php echo $_POST["tentour"]
?></strong> <br />
Ngày khởi hành: <?php echo $_POST["ngay"] ?> <br />
Phương tiện: <?php echo $_POST["phuongtien"] ?> <br />
<br />
Số lượng đăng ký: <strong><?php echo $_POST["soluong"]?>
</strong><br />
Giá tour/khách: 5400000 <br />
Tổng số tiền cho <?php echo $_POST["soluong"]?> khách: <?php
echo (int)$_POST["soluong"] * 5400000 ?> <br />
<br />
Thông tin khách hàng:<br />
Họ tên: <strong><?php echo $_POST["ten"]?> </strong><br />
Địa chỉ: <?php echo $_POST["diachi"]?> <br />
Số điện thoại: <?php echo $_POST["dienthoai"]?> <br />
Các yêu cầu kèm theo:129
<?php echo $_POST["yeucau"]?>
</td></tr>
</table>
</center>
</body

