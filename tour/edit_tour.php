<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cập nhật thông tin tour</title>
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
		<h2>CẬP NHẬT THÔNG TIN TOUR</h2>
	</center>
	<?php
    include '../function/function.php';
    $key = $_REQUEST['matour'];
    $sql = "select * from tour where matour='" . $key . "'";
    $data = Hienthi($sql);
    foreach ($data as $value) {
    ?>
	<form action="" name="" method="POST">
	<div class="container">
		
			<div class="row">
				<div class="col-25">
					<label for="lmatour">Mã tour</label>
				</div>
				<div class="col-75">
					<input type="text" id="lmatour" name="matour" value="<?php echo $value['matour']; ?>"
						placeholder="Mã tour.." readonly>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="limg">Ảnh</label>
				</div>
				<div class="col-75">
					<input type="text" id="limg" name="img" value="<?php echo $value['img']; ?>" placeholder="Ảnh ..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lmota">Mô tả</label>
				</div>
				<div class="col-75">
					<input type="text" id="lmota" name="mota" value="<?php echo $value['mota']; ?>"
						placeholder="Mô tả..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="ldiadiem">Địa điểm</label>
				</div>
				<div class="col-75">
					<input type="text" id="ldiadiem" name="diadiem" value="<?php echo $value['diadiem']; ?>"
						placeholder="Địa điểm..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lthoigian">Thời gian</label>
				</div>
				<div class="col-75">
					<input type="text" id="lthoigian" name="thoigian" value="<?php echo $value['thoigian']; ?>"
						placeholder="Thời gian..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="lngaykhoihanh">Ngày khởi hành</label>
				</div>
				<div class="col-75">
					<input type="date" id="lngaykhoihanh" name="ngaykhoihanh"
						value="<?php echo $value['ngaykhoihanh']; ?>"">
				</div>
			</div>
			<div class=" row">
					<div class="col-25">
						<label for="lgiakm">Giá khuyến mãi</label>
					</div>
					<div class="col-75">
						<input type="text" id="lgiakm" name="giakm" value="<?php echo $value['giakm']; ?>"
							placeholder="Giá khuyến mãi..">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="lgia">Giá cũ</label>
					</div>
					<div class="col-75">
						<input type="text" id="lgia" name="gia" value="<?php echo $value['gia']; ?>"
							placeholder="Giá cũ..">
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="lxuatphat">Xuất phát</label>
					</div>
					<div class="col-75">
						<input type="text" id="lxuatphat" name="xuatphat" value="<?php echo $value['xuatphat']; ?>"
							placeholder="Xuất phát..">
					</div>
				</div>
				<div class="row">
				<div class="col-25">
					<label for="l">Mã Khuyến mãi</label>
				</div>
				<div class="col-75">
					<select name="slkm">
						<?php
          $sql = "select makm,khuyenmai from khuyen_mai";
          $data = Hienthi($sql);
          foreach ($data as $value) {
          ?>
						<option value="<?php echo $value['makm']; ?>">
							<?php echo $value['khuyenmai'] ?>
						</option>
						<?php
          }
          ?>
					</select>
				</div>
			</div>
				<div class="row">
					<input type="submit" name="btedit" value="Update">
				</div>
				<div>
			        <li><a href="listtour.php">back</a></li>
		        </div>
		</form>		
	</div>
	<?php
        }
    ?>

	<?php
    if (isset($_POST['btedit'])) {
	    $key = $_POST['matour'];
	    $img = $_POST['img'];
	    $mota = $_POST['mota'];
	    $diadiem = $_POST['diadiem'];
	    $thoigian = $_POST['thoigian'];
	    $ngaykhoihanh = $_POST['ngaykhoihanh'];
	    $giakm = $_POST['giakm'];
	    $gia = $_POST['gia'];
	    $xuatphat = $_POST['xuatphat'];
		$makm= $_POST['slkm'];
	    $result = Updatetour($img, $mota, $diadiem, $thoigian, $ngaykhoihanh, $giakm, $gia, $xuatphat,$makm,$key);
	    if ($result) {
			echo "<script>alert('Cập nhật thành công !!!')</script>";
	    } else {
		    echo "<script>alert('Lỗi !!!')</script>";
	    }
    }
    ?>

</body>

</html>