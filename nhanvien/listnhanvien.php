<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../menu/menu.css">
    <title>danh sách tour</title>
</head>
<body>
    <div class="header-top">
        <a href="../menu/menu.php" id="logo-top">
            <img src="../images/logo.jpg" alt="">
        </a>
    </div>
    <div class="clear"></div>
    <div class="header-menu">
        <nav class="nav-menu">
            <ul class="list-menu">
                <li class="item-menu"><a href="../menu/menu.php">Trang Chủ</a></li>
                
                <li class="item-menu item-menu__sub-menu"><a href="../menu/menu.php">Tour Nội Địa</a>
                    <ul class="sub-menu">
                        <li><a href="">Hà Nội</a></li>
                    </ul>
                </li>
                <li class="item-menu item-menu__sub-menu"><a href="../menu/menu.php">Tour Quốc Tế</a>
                    <ul class="sub-menu">
                        <li><a href="">Thai Lan</a></li>
                    </ul>
                </li>
                <?php 
                    session_start();
                    if(isset($_SESSION['username']) && ($_SESSION['username'] != "")){
                        echo    '<li class="item-menu"><a href="../tour/tour.php">Quản lý website</a></li>';
                        echo    '<li class="item-menu"><a href="../tour/register_tour.php">Đăng ký tour</a></li>';
                        echo    '<li class="item--menu"><a>'.$_SESSION['username'].'</a>
                                    <ul class="sub-menu">
                                        <li><a href="../logout/logout.php">Account</a></li>
                                        <li><a href="../logout/logout.php">Đăng xuất</a></li>
                                    </ul>
                                </li>';
                        
                    }else{
                ?>
                <li class="item--menu"><a href="../sign_up/register.php">Đăng Ký</a></li>
                <li class="item--menu"><a href="../login/login.php">Đăng Nhập</a></li>
                <?php 
                    }
                ?>
            </ul> 
        </nav>        
    </div>
    <div class="clear"></div>
    <form action="../search/search.php" method="POST">
    <div class="header-with-search">
                <div class="header__search">
                    <input type="text" name="tukhoa" placeholder="Tìm kiếm ...">
                    <button type="submit" >Tìm Kiếm</button>
                </div> 
    </div> 
    </form> 
    <div class="clear"></div>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 80%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #FF0000;
            color: white;
            text-align: center;
        }
    </style>
	<center>
		<h1>DANH SÁCH NHÂN VIÊN</h1>
    <table id="customers">
        <tr>
        <th rowspan="2">STT</th>
            <th rowspan="2">Mã nhân viên</th>
            <th rowspan="2">Họ và tên</th>
            <th rowspan="2">Ngày sinh</th>
            <th rowspan="2">Địa chỉ</th>
            <th rowspan="2">Số điện thoại</th>
            <th rowspan="2">CCCD</th>
            <th rowspan="2">Chức vụ</th>
            <th rowspan="2">Tên đăng nhập</th>
        <tr>
            <th colspan="2"><a href="add_nhanvien.php"> Add New </a></th>
        </tr>
        <?php
            include '../function/function.php';
            $sql="select * from nhan_vien";
            $data=Hienthi($sql);
            $i=1;
            foreach ($data as $value) {
                $key=$value['manhanvien'];
                echo "<tr>
                        <td>".$i++."</td>
                        <td>".$value['manhanvien']."</td>
                        <td>".$value['ten']."</td>
                        <td>".$value['ngaysinh']."</td>
                        <td>".$value['diachi']."</td>
                        <td>".$value['sdt']."</td>
                        <td>".$value['cmnd']."</td>
                        <td>".$value['chucvu']."</td>
                        <td>".$value['username']."</td>
                        <td><a href='edit_nhanvien.php?manhanvien=$key'>Edit</a></td>
                        <td><a href='del_nhanvien.php?manhanvien=$key'>Del</a></td>
                    </tr>";
            }
        ?>
        
    </table>
    <tr text-align="left"><a href="tour.php">Back</a></tr>
    </center>
</body>
</html>