<?php
include '../connect/config.php';
function Insert_tour($matour,$img,$mota,$diadiem,$thoigian,$ngaykh,$giakm,$gia,$xuatphat,$slkm)
{	
	$conn=Connect();
	$sql="Insert into tour values('".$matour."','".$img."','".$mota."','".$diadiem."','".$thoigian."','".$ngaykh."','".$giakm."','".$gia."',
    '".$xuatphat."','".$slkm."')";
	return $conn->query($sql);
	$conn->close();
}
function Insert_information($ten,$ngaysinh,$diachi,$sdt,$cmnd,$username)
{	
	$conn=Connect();
	$sql="Insert into khach_hang ( `ten`, `ngaysinh`, `diachi`, `sdt`, `CMND`, `username`)values('".$ten."','".$ngaysinh."','".$diachi."','".$sdt."','".$cmnd."','".$username."')";
	return $conn->query($sql);
	$conn->close();
}
function Insert_register_tour($makhachhang,$matour,$soluong)
{	
	$conn=Connect();
	$sql="INSERT INTO tour_khach(`matour`, `makhachhang`, `soluong`) values('".$makhachhang."','".$matour."','".$soluong."')";
	return $conn->query($sql);
	$conn->close();
}
function Insert_promotion($makm,$ngaykm,$khuyenmai)
{	
	$conn=Connect();
	$sql="Insert into khuyen_mai values('".$makm."','".$ngaykm."','".$khuyenmai."')";
	return $conn->query($sql);
	$conn->close();
}
function Update_promotion($ngaykm,$khuyenmai,$key)
{	
	$conn=Connect();
	$sql="update khuyen_mai set ngaykm='".$ngaykm."',khuyenmai='".$khuyenmai."' where makm='".$key."'";
	return $conn->query($sql);
	$conn->close();
}
function Delete_khuyenmai($key)
{
    $conn=Connect();
        $sql="delete from khuyen_mai where makm='".$key."'";
        return $conn->query($sql);
    $conn->close();
}
function Hienthi($sql)
{	
	$conn=Connect();
	$result=$conn->query($sql);
	if($result)
	{
		while($row=$result->fetch_assoc())
		{
			$data[]=$row;
		}
	}
	return $data;
	$conn->close();
}

function getall_tour()
{	
	
	$conn=Connect();
	$sql = "select * from tour";
	$result=$conn->query($sql);
	if($result)
	{
		while($row=$result->fetch_assoc())
		{
			$data[]=$row;
		}
	}
	return $data;
	$conn->close();
}
function get_makh()
{	
	$conn=Connect();
	$username = $_SESSION['username'];
	$sql = "select makhachhang from khach_hang where username = '$username'";
	$result=$conn->query($sql);
	if($result)
	{
		while($row=$result->fetch_assoc())
		{
			$data[]=$row;
		}
	}
	return $data;
	$conn->close();
}
function Delete_tour($key)
{
    $conn=Connect();
        $sql="delete from tour where matour='".$key."'";
        return $conn->query($sql);
    $conn->close();
}

function Updatetour($img,$mota,$diadiem,$thoigian,$ngaykhoihanh,$giakm,$gia,$xuatphat,$makm,$key)
{	
	$conn=Connect();
	$sql="update tour set img='".$img."',mota='".$mota."',diadiem='".$diadiem."',thoigian='".$thoigian."',
    ngaykhoihanh='".$ngaykhoihanh."',giakm='".$giakm."',gia='".$gia."',xuatphat='".$xuatphat."',makm='".$makm."' where matour='".$key."'";
	return $conn->query($sql);
	$conn->close();
}
function Insert_nhanvien($manhanvien,$ten,$ngaysinh,$diachi,$sdt,$cmnd,$chucvu,$username)
{	
	$conn=Connect();
	$sql="Insert into nhan_vien values('".$manhanvien."','".$ten."','".$ngaysinh."','".$diachi."','".$sdt."','".$cmnd."','".$chucvu."','".$username."')";
	return $conn->query($sql);
	$conn->close();
}
function Update_nhanvien($ten,$ngaysinh,$diachi,$sdt,$cmnd,$chucvu,$username,$key)
{	
	$conn=Connect();
	$sql="update nhan_vien set ten='".$ten."',ngaysinh='".$ngaysinh."',diachi='".$diachi."',sdt='".$sdt."',
    cmnd='".$cmnd."',chucvu='".$chucvu."',username='".$username."' where manhanvien='".$key."'";
	return $conn->query($sql);
	$conn->close();
}
function Delete_nhanvien($key)
{
    $conn=Connect();
        $sql="delete from nhan_vien where manhanvien='".$key."'";
        return $conn->query($sql);
    $conn->close();
}
?>
