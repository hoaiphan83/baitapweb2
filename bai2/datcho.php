<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php 
if(isset($_POST["Submit"]))/*kiểm tra biểu mẫu có tồn tại và đã được gủi đi hay chưa */
{
		$ten=$_POST["txtten"];/*tạo ra một biến có tên là $ten và gán giá trị của biến $_POST["txtten"] cho biến $ten */
		$tuoi=$_POST["cbotuoi"];/*phương thức post dùng để truyền dữ liệu vào biểu mẫu */
		$gt=$_POST["rdbgt"];
		$diachi=$_POST["txtdiachi"];
		$sokhach=$_POST["txtsokhach"];
		$ngay=$_POST["txtngay"];
		$loai1=$_POST["chkloai"];
		$diadiem=$_POST["rdbdiadiem"];
		$yeucau=$_POST["txtyeucau"];
		$qc=$_POST["select"];
	?>
	<table width="573" border="0">
	<tr>
	<td width="567">
	 <h2 align="center">THÔNG TIN ĐẶT CHỖ </h2>
	<p><strong>Thông tin khách hàng:</strong></p>
	 Họ tên: <?php echo $ten."  ";?> <br>
	  Độ tuổi: <?php echo $tuoi."  ";?><br>
	   Giới tính: <?php echo $gt;?> <br />
	 Địa chỉ: <?php echo $diachi;?> <br />
		<strong>Thông tin đặt chỗ:</strong> <br />
		Số khách tham gia bữa tiệc:<?php echo $sokhach."  ";?> <br>
		 Ngày đặt tiệc: <?php echo $ngay;?> <br />
		Loại tiệc:&nbsp; <?php for($i=0;$i<count($loai1);$i++) echo $loai1[$i]." -  ";?> Địa điểm:<?php echo $diadiem;?> <br />
        <!--vòng lặp for để lặp lại một chuỗi các giá trị trong mảng $loai1
    bắt đầu với giá trị của biến $i bằng 0 và kết thúc khi $i đạt đến giá trị count($loai1)-1-->
		<Strong>Các yêu cầu kèm theo:</Strong> <br />
		<?php echo nl2br($yeucau);?> <br />
        <!--hàm nl2br() để chuyển đổi các ký tự xuống dòng trong biến $yeucau thành các thẻ HTML <br>.-->
		Quý khách biết đến nhà hàng chúng tôi qua: <?php echo $qc;?>
	<br />
	</td>
	</tr>
	</table>
	</div>
<?php } ?>
</body>
</html>
