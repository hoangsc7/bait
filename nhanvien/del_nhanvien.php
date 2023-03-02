<?php
include "../function/function.php";
$key=$_REQUEST['manhanvien'];
$result=Delete_nhanvien($key);
if($result)
{
    header('location:listnhanvien.php');
} 
else
{
    echo"lỗi xóa";
}

 ?>