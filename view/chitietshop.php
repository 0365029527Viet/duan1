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
                                Xem nh???n x??t v??? s???n ph???m</a>
                        </p>
                        <p style="font-size: 17px;">
                            <b class="glyphicon glyphicon-time" aria-hidden="true"></b> <?php echo $value['opentime'] ?> - <?php echo $value['closetime'] ?>
                        </p>
                        <p style="font-size: 17px; color: green;">
                            <b class="glyphicon glyphicon-tag"></b> <?php echo $value['gia'] ?> VND
                        </p>
                        <p>
                            <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>?????t h??ng</a>
                        </p>
                    </div>
                </div>



                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">?????t h??ng</h4>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <form action="index.php?act=giohang" method="post" enctype="multipart/form-data">
                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <img src="admin/admin_review/sanpham/img/<?php echo $value['anh'] ?>" alt="" width="100%" height="200">
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <b>
                                                <h3 style="color: green; margin: 0;"><?php echo $value['tensp'] ?></h3>
                                            </b>
                                            <input type="hidden" name="idpro" value="<?php echo $value['id'] ?>">
                                            <input type="hidden" name="tensp" value="<?php echo $value['tensp'] ?>">
                                            <input type="hidden" name="anh" value="<?php echo $value['anh'] ?>">
                                            <input type="hidden" name="gia" value="<?php echo $value['gia'] ?>">
                                            <p style="font-size: 17px; color: red;">
                                                Gi??: <?php echo $value['gia'] ?> VND
                                            </p>
                                            <?php  } ?>
                                            <p>
                                                <b>
                                                    S??? l?????ng:
                                                </b>
                                                <input type="number" id="input" class="form-control" value="" min="{5" } max="" name="soluong">

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="dathang">Ti???n h??nh ?????t h??ng</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            
        </div>
        <?php

            // if(isset($_POST['dathang'])){
            //     $idpro = $_POST['idpro'];
            //     $tensp = $_POST['tensp'];
            //     $gia = $_POST['gia'];
            //     $anh = $_POST['anh'];
            //     $soluong = $_POST['soluong'];
            //     $tt = $soluong*$gia;
            //     $sp = [$idpro,$tensp,$gia,$soluong,$tt];
            //     array_push($_SESSION['giohang'],$sp);
            //     include "viewcart.php";
            // }
            
        ?>
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="row">
                    <div class="list-group">
                        <a href="indexAll.php" class="list-group-item">Trang ch???</a>
                        <a class="list-group-item" data-toggle="modal" href='#modal-id'>B??nh lu???n</a>
                        <a href="#" class="list-group-item">S???n ph???m kh??c</a>
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