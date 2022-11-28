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
            // $resuft = load_one_sp($id);
            foreach ($resuft as $key => $value) {


            ?>

                <div class="detail">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <img src="admin/admin_review/sanpham/img/<?php echo $value['anh'] ?>" alt="" width="100%" height="300">
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <br>
                        <p><?php echo $value['khuvuc'] ?></p>
                        <b>
                            <h3><?php echo $value['tensp'] ?></h3>
                        </b>
                        <p>
                        <div class="row">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-top: 10px;">
                                <span><?php echo $value['tongdiem'] ?></span>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <b><?php echo $value['diemvitri'] ?></b> <br> Vị trí
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <b><?php echo $value['diemgiaca'] ?></b> <br> Giá cả
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <b><?php echo $value['diemkhonggia'] ?></b> <br> Không gian
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <b><?php echo $value['diemchatluong'] ?></b> <br> Chất lượng
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <b><?php echo $value['diemphucvu'] ?></b> <br> Phục vụ
                            </div>

                        </div>
                        </p>
                        <p style="font-size: 17px;">
                            <b class="glyphicon glyphicon-pushpin" aria-hidden="true"></b> <?php echo $value['diachi'] ?>
                        </p>
                        <p style="font-size: 17px;">
                            <b class="glyphicon glyphicon-time" aria-hidden="true"></b> <?php echo $value['opentime'] ?> - <?php echo $value['closetime'] ?>
                        </p>
                        <p style="font-size: 17px;">
                            <b class="glyphicon glyphicon-tag"></b> <?php echo $value['gia'] ?>
                        </p>
                    </div>
                </div>

        </div>
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="row">
                    <div class="list-group">
                        <a href="indexAll.php" class="list-group-item text-center">Trang chủ</a>
                        <a class="btn btn-primary list-group-item" data-toggle='modal' href='#modal-id'>Bình Luận</a>
                        <a href="#" class="list-group-item text-center">Sản phẩm khác</a>
                    </div>
                </div>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="background-color: #fff; margin: 0 10px 10px 30px;">
                <h3 class="text-center">Bình luận</h3>
            </div>

            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width: 900px;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Viết bình luận</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                            <div class="row">
                                                <img src="admin/admin_review/sanpham/img/<?php echo $vaưlue['anh'] ?>" alt="" width="100%" height="200">
                                                <b>
                                                    <h4 style="color: green;"><?php echo $value['tensp'] ?></h4>
                                                </b>
                                                <p style="color: green;"><?php echo $value['diachi'] ?></p>
                                            </div>
                                        </div>

                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                            <div class="container">
                                                <div class="row">

                                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                        <div class="slidecontainer" style=" display: flex;">
                                                            <p>Điểm:</p>
                                                            <input type="range" min="0" max="10" value="10" class="slider" id="myRange" width="70%" style="margin: 0 10px 0 10px ; transform: translate(0px, -5px);">
                                                            <p><span id="demo"></span></p>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        var slider = document.getElementById("myRange");
                                                        var output = document.getElementById("demo");
                                                        output.innerHTML = slider.value;

                                                        slider.oninput = function() {
                                                            output.innerHTML = this.value;
                                                        }
                                                    </script>

                                                </div>
                                            </div>
                                            <textarea name="" id="" cols="65" rows="20" placeholder="Nhận xét......"></textarea>


                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Hoàn tất</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <?php  } ?>

        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <iframe src="" frameborder="0" width="100%" height="500px"></iframe>
        </div>

        </div>
    </div>
</body>

</html>