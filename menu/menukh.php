<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="menu.css">
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
                    if(isset($_SESSION['username']) && ($_SESSION['username'] != "")){
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
    <div class="container">
        <div class="home-product">
            <div class="gird">
                <div class="grid__row">
                    <?php 
                    include ('../function/function.php');
                    $sphome = getall_tour();
                    foreach ($sphome as $sp)
                    echo '<div class="grid__column">
                            <div class="product-item">
                                <div class="product-item__img" style="background-image: url(../images/'.$sp['img'].');"></div>
                                <h4 class="product-item__name">
                                    <a href="../tour/information_tour.php">'.$sp['mota'].'</a>
                                </h4>
                            

                                <div class="product-item__time">
                                <strong>Thời gian: </strong>'.$sp['thoigian'].'
                                </div>
                                <div class="product-item__time">
                                    <strong>Ngày khởi hành: </strong>'.$sp['ngaykhoihanh'].'
                                </div>
                                <div class="product-item__price">
                                    <strong>Giá: </strong> 
                                    <span class="product-item__price-current">'.$sp['giakm'].'</span> 
                                    <span class="product-item__price-old">'.$sp['gia'].'</span>
                                </div>
                                
                                <div class="product-item__location-start">
                                    <strong>Xuất phát: </strong>
                                    <span class="product-item__price-current">'.$sp['xuatphat'].'</span>
                                </div>
                            </div>
                        </div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>