<?php 
session_start();
include '../connect/config.php';
if( isset($_POST['submit']) && $_POST['username'] != '' && $_POST['password'] != '' && $_POST['repassword'] != ''){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $level = 'user';
    $conn = Connect();
    if($password != $repassword){
        header('location:register.php');
    }
    $sql = "select * from account where username = '$username' ";
    $old = mysqli_query($conn,$sql);
    $password = md5($password);
    if(mysqli_num_rows($old) > 0){  
        header('location:register.php');
    }
    $sql = "insert into account (username,password,level) values ('$username','$password','$level')";
    mysqli_query($conn,$sql);
    $_SESSION['username']= $username;
    echo "Đã đăng ký thành công.";
    header('location:personal_information.php');
}else {
    header('location:register.php');
    }

?>