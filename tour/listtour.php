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
		<h1>DANH SÁCH TOUR</h1>
    <table id="customers">
        <tr>
        <th rowspan="2">STT</th>
            <th rowspan="2">Mã tour</th>
            <th rowspan="2">Ảnh</th>
            <th rowspan="2">Mô tả</th>
            <th rowspan="2">Địa điểm</th>
            <th rowspan="2">Thời gian</th>
            <th rowspan="2">Ngày khởi hành</th>
            <th rowspan="2">Giá khuyến mãi</th>
            <th rowspan="2">Giá gốc</th>
            <th rowspan="2">Xuất phát</th>
            <th rowspan="2">Mã khuyến mãi</th>
        <tr>
            <th colspan="2"><a href="add_tour.php"> Add New </a></th>
        </tr>
        <?php
            include '../function/function.php';
            $sql="select * from tour";
            $data=Hienthi($sql);
            $i=1;
            foreach ($data as $value) {
                $key=$value['matour'];
                echo "<tr>
                        <td>".$i++."</td>
                        <td>".$value['matour']."</td>
                        <td>".$value['img']."</td>
                        <td>".$value['mota']."</td>
                        <td>".$value['diadiem']."</td>
                        <td>".$value['thoigian']."</td>
                        <td>".$value['ngaykhoihanh']."</td>
                        <td>".$value['giakm']."</td>
                        <td>".$value['gia']."</td>
                        <td>".$value['xuatphat']."</td>
                        <td>".$value['makm']."</td>
                        <td><a href='edit_tour.php?matour=$key'>Edit</a></td>
                        <td><a href='delete_tour.php?matour=$key'>Del</a></td>
                    </tr>";
            }
        ?>
        
    </table>
    <tr text-align="left"><a href="tour.php">Back</a></tr>
    </center>
</body>
</html>