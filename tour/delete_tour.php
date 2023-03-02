<?php
include "../function/function.php";
$key=$_REQUEST['matour'];
$result=Delete_tour($key);
if($result)
{
    header('location:listtour.php');
} 
else
{
    echo"lỗi xóa";
}

 ?>