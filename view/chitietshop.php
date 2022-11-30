<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .detail {
            width: 100%;
            height: 300px;
            background-color: rgb(255, 255, 255);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .detail img {
            margin-left: 0px;
            transform: translate(-15px);
        }

        .detail span {
            padding: 15px;
            background-color: green;
            border-radius: 50%;
            font-weight: 800;
            color: white;
        }

        /* .comment{
            width: 100%;
            height: 100%;
            padding: 10px;
            font-size: 15px;
            font-weight: 900;
            background-color: white;
        } */
        .content {
            width: 100%;
            height: 500px;
            background-color: #fff;
        }

        hr {
            width: 80%;
            border: 1px solid rgb(179, 179, 179);
        }

        .name img {
            border-radius: 50%;
        }

        .point span {
            padding: 10px;
            background-color: green;
            border-radius: 50%;
            font-weight: 600;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">

            <?php
            foreach ($resuft as $key => $value) {


            ?>

                <div class="detail">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <img src="admin/admin_review/sanpham/img/<?php echo $value['anh'] ?>" alt="" width="100%" height="300">
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <p><?php echo $value['khuvuc'] ?></p>
                        <b>
                            <h3><?php echo $value['tensp'] ?></h3>
                        </b>
                        <p>

                        </p>
                        <p style="font-size: 17px;">
                            <b class="glyphicon glyphicon-pushpin" aria-hidden="true"></b> <?php echo $value['diachi'] ?>
                        </p>
                        <p>
                            <a href="index.php?act=chitiet&&id=<?php echo $value['id'] ?>"> 
                            <b class="glyphicon glyphicon-pencil" aria-hidden="true"></b>
                             Xem nhận xét về sản phẩm</a>
                        </p>
                        <p style="font-size: 17px;">
                            <b class="glyphicon glyphicon-time" aria-hidden="true"></b> <?php echo $value['opentime'] ?> - <?php echo $value['closetime'] ?>
                        </p>
                        <p style="font-size: 17px;">
                            <b class="glyphicon glyphicon-tag"></b> <?php echo $value['gia'] ?>
                        </p>
                        <p>
                            <a href="" class="btn btn-primary text-center">Đặt hàng</a>
                        </p>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="row">
                    <div class="list-group">
                        <a href="indexAll.php" class="list-group-item">Trang chủ</a>
                        <a class="list-group-item" data-toggle="modal" href='#modal-id'>Bình luận</a>
                        <a href="#" class="list-group-item">Sản phẩm khác</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
               
            </div>



            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <iframe src="" frameborder="0" width="100%" height="500px"></iframe>
            </div>

        </div>
    </div>
</body>

</html>