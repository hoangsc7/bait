<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin sách</title>
</head>
<body>
<form action="" method="POST">
    <table>
        <tr>
            <td>nhập mã sách</td>
            <td><input type="text" name="masach"></td>
        </tr>
        <tr>
            <td>nhập tên sách</td>
            <td><input type="text" name="ten"></td>
        </tr>
        <tr>
            <td>nhập tác giả</td>
            <td><input type="text" name="tacgia"></td>
        </tr>
        <tr>
            <td>nhập số trang</td>
            <td><input type="text" name="sotrang"></td>
        </tr>
        <tr>
            <td>nhập năm xuất bản</td>
            <td><input type="text" name="namxb"></td>
        </tr>
        <tr>
            <td>nhập tên nhà xuất bản</td>
            <td><input type="text" name="nhaxb"></td>
        </tr>
    </table>
    <div class="row">
      <input type="submit" name="add" value="OK">
    </div>
</form>
<?php
if(isset($_POST['add'])){
    $masach = $_POST['masach'];
    $tensach = $_POST['tensach'];
    $tacgia = $_POST['tacgia'];
    $sotrang = $_POST['sotrang'];
    $namxb = $_POST['namxb'];
    $nhaxb = $_POST['nhaxb'];
    $dom = new DOMDocument('1.0', 'utf-8');
    $dom->formatOutput = true;
    $dom->preserveWhiteSpace = false;
    $dom->load('sach.xml');
    $peoples = $dom->documentElement;
    $thongtin_item = $peoples->lastChild;

    $thongtin = $dom->createElement('thongtin');
    $peoples->appendChild($thongtin);

    $child_mode_ma = $dom->createElement('ma');
    $child_mode_ma->appendChild($dom->createTextNode($ma));
    $thongtin->appendChild($child_mode_ma);

    $child_mode_ten = $dom->createElement('ten');
    $child_mode_ten->appendChild($dom->createTextNode($ten));
    $thongtin->appendChild($child_mode_ten);

    $child_mode_ngaymua = $dom->createElement('ngaymua');
    $child_mode_ngaymua->appendChild($dom->createTextNode($ngaymua));
    $thongtin->appendChild($child_mode_ngaymua);
    $peoples->insertBefore($thongtin, $thongtin_item);
    $dom->save('infor.xml');
}
?>
</body>
</html>