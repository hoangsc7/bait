<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Danng ky thanh vien</title>
</head>
<body>
    <form class="modal" action="register_submit.php" method="POST">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <div class="auth-form" >
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__swith-btn"><a href="../login/login.php">Đăng nhập</a></span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" name="username" placeholder="Tên đăng nhập">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" name="repassword" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>
                    <div class="auth-form__controls">
                        <button class="btn"><a href="../menu/menu.php">TRỞ LẠI</a></button>
                        <button class="btn btn--primary" type="submit" name="submit">ĐĂNG KÝ</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>