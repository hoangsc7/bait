<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nhập thông tin</title>
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
			background-color: #FF8C00;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
			width: 15%;
		}

		input[type=submit]:hover {
			background-color: #FF4500;
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
		<h2>NHẬP THÔNG TIN</h2>
	</center>
	<div class="container">
		<form action="infor_register_tour.php" name="" method="POST">
			<div class="row">
				</div>
				<div class="col-25">
					<label for="lsoluong">Số lượng khách</label>
				</div>
				<div class="col-75">
					<input type="text" id="lsoluong" name="soluong" placeholder="Số lượng khách..">
				</div>
			</div>
			<div class="row">
				<input type="submit" name="addtocart" value="Đăng ký ngay">
			</div>
		</form>
		<div>
			<li><a href="../menu/menu.php">back</a></li>
		</div>
	</div>
	<?php
    session_start();
    include('../function/function.php');
    $data = get_makh();
    foreach ($data as $username)
	    if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
		    $matour = $_POST['matour'];
			$id = $_POST('id');
		    $makhachhang = $makhachhang['makhachhang'];
		    if (isset($_POST['btadd'])) {
			    $soluong = $_POST['soluong'];
			    $result = Insert_register_tour($id,$matour,$makhachhang);
			    if ($result) {
				    echo "<script>alert('Đăng ký thành công')</script>";
			    } else {
				    echo "<script>alert('Lỗi thêm !!!')</script>";
			    }
		    }
	    }
    ?>
</body>

</html>