<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm thông tin nhân viên</title>
	<style>
		* {
			box-sizing: border-box;
			width: 90%;
		}

		input[type=text] {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			resize: vertical;
		}

		label {
			padding: 12px 12px 12px 0;
			display: inline-block;
		}

		input[type=submit] {
			background-color: #04AA6D;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
			width: 15%;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		.container {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}

		.col-25 {
			float: left;
			width: 15%;
			margin-top: 6px;
		}

		.col-75 {
			float: left;
			width: 60%;
			margin-top: 6px;
		}

		/* Clear floats after the columns */
		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {

			.col-25,
			.col-75,
			input[type=submit] {
				width: 100%;
				margin-top: 0;
			}
		}
	</style>
</head>

<body>
	<center>
		<h2>NHẬP THÔNG TIN NHÂN VIÊN</h2>
	</center>
	<div class="container">
		<form action="" name="" method="POST">
			<div class="row">
				<div class="col-25">
					<label for="lmanhanvien">Mã nhân viên</label>
				</div>
				<div class="col-75">
					<input type="text" id="lmanhanvien" name="manhanvien" placeholder="Mã nhân viên..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lten">Họ và tên</label>
				</div>
				<div class="col-75">
					<input type="text" id="lten" name="ten" placeholder="Họ và tên ..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lngaysinh">Ngày sinh</label>
				</div>
				<div class="col-75">
					<input type="date" id="lngaysing" name="ngaysinh">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="ldiachi">Địa chỉ</label>
				</div>
				<div class="col-75">
					<input type="text" id="ldiachi" name="diachi" placeholder="Địa chỉ..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lsdt">Số điện thoại</label>
				</div>
				<div class="col-75">
					<input type="text" id="lsdt" name="sdt" placeholder="Số điện thoại..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lcmnd">CCCD</label>
				</div>
				<div class="col-75">
					<input type="text" id="lcmnd" name="cmnd" placeholder="Số CCCD..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lchucvu">Chức vụ</label>
				</div>
				<div class="col-75">
					<input type="text" id="lchucvu" name="chucvu" placeholder="Chức vụ..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lusername">Tên đăng nhập</label>
				</div>
				<div class="col-75">
					<input type="text" id="lusername" name="username" placeholder="Tên đăng nhập..">
				</div>
			</div>
			<div class="row">
				<input type="submit" name="btadd" value="Add New">
			</div>
		</form>
		<div>
			<li><a href="listnhanvien.php">back</a></li>
		</div>
	</div>

	<?php
    include '../function/function.php';
if (isset($_POST['btadd'])) {
	$manhanvien = $_POST['manhanvien'];
	$ten = $_POST['ten'];
	$ngaysinh = $_POST['ngaysinh'];
	$diachi= $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$cmnd = $_POST['cmnd'];
	$chucvu = $_POST['chucvu'];
	$username = $_POST['username'];
	$result = Insert_nhanvien($manhanvien, $ten, $ngaysinh, $diachi, $sdt, $cmnd, $chucvu, $username);
	if ($result) {
		echo "<script>alert('Đăng ký thành công')</script>";
	} else {
		echo "<script>alert('Lỗi thêm !!!')</script>";
	}
}
?>
</body>

</html>