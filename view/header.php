<?php

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <style>
        .col-2dot4,
        .col-sm-2dot4,
        .col-md-2dot4,
        .col-lg-2dot4,
        .col-xl-2dot4 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-2dot4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%;
        }

        @media (min-width: 540px) {
            .col-sm-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        @media (min-width: 720px) {
            .col-md-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        @media (min-width: 960px) {
            .col-lg-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        @media (min-width: 1140px) {
            .col-xl-2dot4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 20%;
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        .shop {
            position: absolute;
            left: 25%;
            opacity: 0;
        }

        .item:hover .shop {
            opacity: 1;
            top: 15%;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- nav -->
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="indexAll.php">Foody.vn</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Thử quán mới</a></li>
                        <li><a href="#">Đặt đồ ăn</a></li>
                        <li><a href="#">Đang khuyến mãi</a></li>
                        <li><a href="index.php?act=donhang">Vừa đặt gần đây</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Địa điểm, món ăn, ...">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <!--  -->

                        <li>
                            <?php

                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                                if ($role == 1) {
                                    header('location: admin/index.php');
                                } else {
                                    $row = load_tk($id);
                                    
                                    echo "<a href='index.php?act=trangcanhan'>$name " . "  " ."<img src='profile/image/"."$img' style='border-radius: 50%;' width='30' height='30'></a>";
                                }
                                
                            } else {
                                echo "<a href='indexAll.php?act=dangnhap'>Đăng nhập</a>";
                            }
                            // foreach ($row as $key => $value) {
                            //     echo "<pre>";
                            //     print_r($value);
                            // }
                            // ?>
                        </li>
                        <li>
                            <?php
                            if (isset($_SESSION['user'])) {
                                echo "<a href='indexAll.php?act=dangxuat'>Đăng xuất</a>";
                            }
                            ?>

                        </li>
                        <li class="dropdown">
                            <a href="index.php?act=giohang" style="font-size: 20px; color: red; margin: 0 10px 0 0;">
                                <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- banner -->

            </nav>
        </div>
    </div>