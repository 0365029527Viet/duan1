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
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- nav -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Foody.vn</a>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Thử quán mới</a></li>
                            <li><a href="#">Đặt đồ ăn</a></li>
                            <li><a href="#">Đang khuyến mãi</a></li>
                            <li><a href="#">Vừa đặt gần đây</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Địa điểm, món ăn, ...">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">

                        
                            <li>
                             <?php
                                if(isset($_SESSION['user'])){
                                    extract($_SESSION['user']);
                                    // if($role = 1){
                                    //     header('location : admin/index.php');
                                    // }else{
                                    //     echo " xin chao";
                                    // }
                                    echo ""."<a href=''>$name <img src='image/user-default-female.png' style='border-radius: 50%;' width='30' height='30'></a>";
                                }else{
                                    echo "<a href='indexAll.php?act=dangnhap'>Đăng nhập</a>";
                                }
                             ?>
                            </li>
                            <li>
                                <?php
                                    if(isset($_SESSION['user'])){
                                        echo "<a href='indexAll.php?act=dangnhap'>Đăng xuất</a>";
                                    }
                                ?>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ngôn ngữ <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Vietnamese</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- banner -->
                    <div class="banner">
                        <img src="image/foody-675x355_foodyappbanner-636530746968443602.jpg" alt="" class=" center-block">
                        <p class="text-center">Foody app trên mobie <br>
                                            Khám phá, đặt bàn, giao tận nơi</p>
                    </div>
                </nav>
            </div>
        </div>    
    </div>
    