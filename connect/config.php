<?php
$host="localhost";
$user="root";
$pass="";
$dbname="qltour1";
function Connect()
{
	$con=new mysqli('localhost','root','','qltour1');
	if($con)
	{
		return $con;
	}
	else
	{
		echo"Lỗi kết nối";
	}
}
?>