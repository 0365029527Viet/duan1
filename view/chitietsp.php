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
            $resuft = load_one_sp($id);
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

            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="modal fade" id="modal-id">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width: 900px;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Đánh giá và nhận xét</h4>
                            </div>



                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                            <div class="row">
                                                <img src="admin/admin_review/sanpham/img/<?php echo $value['anh'] ?>" alt="" width="100%" height="200">
                                                <b>
                                                    <h4 style="color: green;"><?php echo $value['tensp'] ?></h4>
                                                </b>
                                                <p style="color: green;"><?php echo $value['diachi'] ?></p>
                                            </div>

                                            <form action="" method="post">

                                                <div class="row">
                                                    <input type="hidden" name="idpro" value="<?php echo $value['id'] ?>">
                                                <?php  } ?>
                                                <div class="slidecontainer" style=" display: flex;">
                                                    <b style="width: 40%;">Vị trí:</b>
                                                    <input type="range" name="vitri" min="0" max="10" class="slider" id="myRange" width="70%" style=" transform: translate(0px, -5px);">
                                                    <p><span id="demo"></span></p>
                                                </div>
                                                <div class="slidecontainer" style=" display: flex;">
                                                    <b style="width: 40%;">Chất lượng:</b>
                                                    <input type="range" min="0" max="10" class="slider" id="myRange2" width="70%" style=" transform: translate(0px, -5px);" name="chatluong">
                                                    <p><span id="demo2"></span></p>
                                                </div>
                                                <div class="slidecontainer" style=" display: flex;">
                                                    <b style="width: 40%;">Giá cả:</b>
                                                    <input type="range" min="0" max="10" class="slider" id="myRange3" width="70%" style=" transform: translate(0px, -5px);" name="giaca">
                                                    <p><span id="demo3"></span></p>
                                                </div>
                                                <div class="slidecontainer" style=" display: flex;">
                                                    <b style="width: 40%;">Phục vụ:</b>
                                                    <input type="range" min="0" max="10" class="slider" id="myRange4" width="70%" style=" transform: translate(0px, -5px);" name="phucvu">
                                                    <p><span id="demo4"></span></p>
                                                </div>
                                                <div class="slidecontainer" style=" display: flex;">
                                                    <b style="width: 40%;">Không gian:</b>
                                                    <input type="range" min="0" max="10" class="slider" id="myRange5" width="70%" style=" transform: translate(0px, -5px);" name="kogian">
                                                    <p><span id="demo5"></span></p>
                                                </div>
                                                </div>
                                        </div>

                                        <!-- javasrcrip_starts -->
                                        <script>
                                            var slider = document.getElementById("myRange");
                                            var output = document.getElementById("demo");

                                            var slider2 = document.getElementById("myRange2");
                                            var output2 = document.getElementById("demo2");

                                            var slider3 = document.getElementById("myRange3");
                                            var output3 = document.getElementById("demo3");

                                            var slider4 = document.getElementById("myRange4");
                                            var output4 = document.getElementById("demo4");

                                            var slider5 = document.getElementById("myRange5");
                                            var output5 = document.getElementById("demo5");

                                            output.innerHTML = slider.value;
                                            slider.oninput = function() {
                                                output.innerHTML = this.value;
                                            }

                                            output2.innerHTML = slider2.value;
                                            slider2.oninput = function() {
                                                output2.innerHTML = this.value;
                                            }
                                            output3.innerHTML = slider3.value;
                                            slider3.oninput = function() {
                                                output3.innerHTML = this.value;
                                            }
                                            output4.innerHTML = slider4.value;
                                            slider4.oninput = function() {
                                                output4.innerHTML = this.value;
                                            }
                                            output5.innerHTML = slider5.value;
                                            slider5.oninput = function() {
                                                output5.innerHTML = this.value;
                                            }
                                        </script>
                                        <!-- javascrip_end -->
                                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                            <textarea name="noidung" cols="65" rows="25" placeholder="Nhận xét......"></textarea>
                                        </div>
                                    </div>
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        extract($_SESSION['user']);
                                    ?>
                                        <input type="hidden" value="<?php echo $id; ?>" name="iduser">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="btn-comment">Hoàn tất</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            if (isset($_POST['btn-comment'])) {
                $iduser = $_POST['iduser'];
                $idpro = $_POST['idpro'];
                $noidung = $_POST['noidung'];
                $tong = ($_POST['vitri'] + $_POST['chatluong'] + $_POST['giaca'] + $_POST['kogian'] + $_POST['phucvu']) / 5;
                $ngaybinhluan = date('h:i:sa d/m/Y');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan, $tong);
            }

            ?>


            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <?php
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        $id = $_GET['id'];
                        $row = load_bl_sp($id);
                        foreach ($row as $key => $value) {
                           ?>
              
                <aside style="height: 100px;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color: rgb(255, 155, 155); border-radius: 10px; margin-bottom: 20px;">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="name pull-left" style="width: 200px;">
                                    <?php
                                        $id = $value['iduser'];
                                        $resuft = load_bl_user($id);
                                        foreach ($resuft as $key => $values) {
                                           ?>
                                     
                                    <img src="profile/image/<?php echo $values['img']; ?>" alt="" width="40" height="40" style="float: left; margin-right: 5px;"> <b><?php echo $values['name'] ?> </b> <br><?php echo $value['ngaybinhluan'] ?> 
                                    
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="point pull-right" style="margin-top: 10px;">
                                    <span><?php echo $value['tongdiem'] ?></span>
                                </div>
                            </div> <br><br>
                            <hr>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="binhluan">
                                    <?php
                                        $id = $value['idpro'];
                                        $resufts = load_one_sp($id);
                                        foreach ($resufts as $key => $valuess) {
                                           ?>
                                   
                                    <p><a href=""><?php echo $valuess['tensp'] ?></a></p>
                                    <?php
                                        }
                                    ?>
                                    <div class="nhanxet">
                                        <?php echo $value['noidung'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <?php 
                        }
                    }
                ?>
            </div>

        </div>
    </div>
</body>

</html>