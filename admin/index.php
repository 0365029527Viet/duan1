<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .formSP{
            background-color: #fffa65;
            box-shadow: 0px 0px 5px 5px;
            min-height: 50vh;
            margin: 0 auto;
            width: 700px;
            height: auto;
        }
        .formSP .input-group{
            padding: 10px;
            margin: 0 auto;
        }
        .formSP .input-group input{
            position: relative;
            display: flex;
            width: 500px;
            height: 30px;
        }
        .formSP button{
            margin: 0 auto;
            width: 500px;
        }
        .container-fluid{
            height: 100%;
        }
        .menu{
            background-color: rgb(212, 212, 212);
            height: 1000px;
        }
        .home{
            background-color: #fff;
            height: 1000px;
        }
        .banner{
            height: 130px;
        }
        .banner img{
            margin-top: 10px;
        }
        .flex-column li a{
            padding: 50px;
            min-height: 50px;
        }
        .admin{
            border-radius: 50%;
            width: 30px;
            height: 30px;
            margin-left: 20px;
        }
        .danhmuc{
            width: 100%;
            height: 100px;
            background-color: #C4E538;
            color: white;
        }
        .danhmuc h3{
            margin-left: 10px;
        }
        .chitiet{
            background-color: #FFC312;
        }
        .chitiet a{
            color: #fff;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu">
                <div class="row">
                    
                    <div class="banner">
                        <img src="../image/White_Black_Friday_Sale_Modern_Canvas_Banner-removebg-preview.png" class="img-responsive" alt="Image">
                    </div>
                    
                </div> <hr>
                <div class="row" class="name">
                    <img src="../image/user-default-female.png" alt="" class="admin">
                    <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                            echo "".$name;
                        }else{
                            header("location: ../indexAll.php");
                        }
                    ?>
                </div> <hr>
               <div class="row">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?act=home"> 
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                             Home</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>    
                            Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=viewdm">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>     
                            Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?act=viewsp">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>    
                            Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="index.php?act=taikhoan">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>     
                            Account</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="index.php?act=comment">
                            <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>  
                            Comment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="index.php?act=thongke">
                            <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
                            Statistics</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 home">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Admin</a>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                if(isset($_SESSION['user'])){
                                    echo "<li><a href='../indexAll.php?act=dangxuat'>Đăng xuất <span class='glyphicon glyphicon-log-in' aria-hidden='true'></span></a></li>";
                                }
                            ?>
                            
                        
                    </ul>
                    </div>
                </nav>
                
            </div>
            <?php
                include "header.php";
            ?>
            </div>
            
            
            
            
        </div>
    </div>
</body>
</html>
