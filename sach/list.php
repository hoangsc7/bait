<?php
$xml = new SimpleXMLElement('sach.xml', 0, TRUE);
echo ('<pre>');
echo ('</pre>');
?>
<style>
table, th, td {
  border: 1px solid blue;
}
</style>
<table >
    <head>
        <tr>
            <th>mã sách</th>
            <th>tên sách</th>
            <th>tác giả</th>
            <th>số trang</th>
            <th>năm xuất bản</th>
            <th>nhà xuất bản</th>
        </tr>
    </head>
    <body>
        <?php foreach ($xml->thongtin as $emp ) : ?>
        <tr>
            <td><?php echo $emp->masach;?></td>
            <td><?php echo $emp->tensach;?></td>
            <td><?php echo $emp->tacgia;?></td>
            <td><?php echo $emp->sotrang;?></td>
            <td><?php echo $emp->namxb;?></td>
            <td><?php echo $emp->nhaxb;?></td>
        </tr>
        <?php endforeach;
        ?>
    </body>

</table>