<?php
include "../function/function.php";
$key=$_REQUEST['makm'];
$result=Delete_khuyenmai($key);
if($result)
{
    header('location:listpromotion.php');
} 
else
{
    echo"lỗi xóa";
}

 ?>