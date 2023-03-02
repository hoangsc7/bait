<?php
include '../connect/config.php';
session_start();

if (isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    $conn = Connect();
    $sql = "select * from account where username='$username' and password='$password' and level='user' ";
    $user = mysqli_query($conn, $sql);
    $level = mysqli_query($conn, $sql);
    if (mysqli_num_rows($user) > 0) {
        $_SESSION['username'] = $username;
        if ($level = 'admin') {
            header('location:../menu/menu.php');
        } else {
            header('location:../menu/menukh.php');
        }
    } else {
        echo 'Tên đăng nhập hoặc mật khẩu không chính xác!';
        echo '<button class="btn"><a href="../login/login.php">TRỞ LẠI</a></button>';
    }
} else {
    header('location:login.php');
}
?>