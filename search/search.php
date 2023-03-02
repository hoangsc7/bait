<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="../menu/menu.css">
    <title>Menu</title>
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
                    if(isset($_SESSION['username']) && ($_SESSION['username'] != "" )){
                        echo    '<li class="item-menu"><a href="../menu/menu.php">Danh sách Tour</a></li>';
                    }
                    if(isset($_SESSION['username']) && ($_SESSION['username'] != "")){
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
    <div class="header-with-search">
                <div class="header__search">
                    <input type="text" name="tukhoa" placeholder="Tìm kiếm ...">
                    <button type="submit" >Tìm Kiếm</button>
                </div> 
    </div>  
    <div class="clear"></div>  
    <div class="container">
        <div class="home-product">
            <div class="gird">
                <div class="grid__row">
                    <div class="grid__column">
                        <?php
                        if(isset($_POST['tukhoa'])){
                            echo '<div class="product-item">
                            <div class="product-item__img" style="background-image: url(https://vietnamtravel.biz.vn/public/storage/1617200429_525_186800.jpg);"></div>
                            <h4 class="product-item__name">
                                <a href="">TP.HCM - Singapore - Malaysia 4 Ngày, 4****, Giá Rẻ Nhất, Khởi Hành Tháng 10, 11, 12/ 2022</a>
                            </h4>
                            <div class="product-item__time">
                                <strong>Thời gian: </strong>4 ngày
                            </div>
                            <div class="product-item__time">
                                <strong>Ngày khởi hành: </strong>Hàng ngày
                            </div>
                            <div class="product-item__price">
                                <strong>Giá: </strong> 
                                <span class="product-item__price-current">1.200.000 VND </span> 
                                <span class="product-item__price-old">1.500.000 VND</span>
                            </div>
                            
                            <div class="product-item__location-start">
                                <strong>Xuất phát: </strong>
                                <span class="product-item__price-current">Hồ Chí Minh</span>
                            </div>
                            </div>';
                        }  
                        ?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>