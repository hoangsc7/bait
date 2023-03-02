<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cập nhật thông tin tour</title>
    <style>
        * {
            box-sizing: border-box;
            width: 90%;
        }

        input[type=text] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            width: 15%;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 15%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 60%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <center>
        <h2>CẬP NHẬT THÔNG TIN TOUR</h2>
    </center>
    <?php
    include '../function/function.php';
    $key = $_REQUEST['makm'];
    $sql = "select * from khuyen_mai where makm='" . $key . "'";
    $data = Hienthi($sql);
    foreach ($data as $value) {
    ?>

    <div class="container">
        <form action="" name="" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="lmakm">Mã khuyến mãi</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lmakm" name="makm" value="<?php echo $value['makm']; ?>" placeholder="..."
                        readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lngaykm">Ngày khuyến mãi</label>
                </div>
                <div class="col-75">
                    <input type="date" id="lngaykm" name="ngaykm" value="<?php echo $value['ngaykm']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lkhuyenmai">Khuyến mãi</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lkhuyenmai" name="khuyenmai" value="<?php echo $value['khuyenmai']?>">
                </div>
            </div>
            <div class="row">
                <input type="submit" name="btedit" value="Update">
            </div>
        </form>
    </div>

    <?php
    }
    ?>
    <?php

    if (isset($_POST['btedit'])) {
        $key = $_POST['makm'];
        $ngaykm = $_POST['ngaykm'];
        $khuyenmai = $_POST['khuyenmai'];
        $result = Update_promotion($ngaykm, $khuyenmai, $key);
        if ($result) {
            header('location:listpromotion.php');
        } else {
            echo "Lỗi thêm!";
        }
    }
    ?>
</body>

</html>