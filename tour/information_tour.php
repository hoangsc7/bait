<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
       <center>Thông tin chi tiết</center>
       <?php>
       include '../function/function.php';
       $key = $_REQUEST['matour'];
       $sql = "select * from tour where matour='" . $key . "'";
       $data = Hienthi($sql);
       foreach ($data as $value) {
      ?>
    </body>
</html>