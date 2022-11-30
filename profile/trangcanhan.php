<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .list-group a{
            padding-left: 30px;
        }
    </style>
</head>
<body> <br>

    <div class="container">
        <div class="row">
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION);
                    
                ?>
                <div class="row" style="border: 1px solid black;">
                    <img src="profile/image/<?php echo $img; ?>" alt="" width="130" height="130" class="center-block" style="margin-top: 20px; border-radius: 50%;">
                    <h2 class="text-center">
                        <?php echo $name; ?>
                    </h2> <br> <br>
                    <?php } ?>
                    <div class="list-group">
                        <a href="" class="list-group-item" target="profile">
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Đơn hàng của bạn</a>
                        <a href="profile/thongtin.php" class="list-group-item" target="profile">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            Thông tin cơ bản</a>
                        <a href="" class="list-group-item" target="profile">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            Đổi mật khẩu</a>
                        <a href="profile/avatar.php" class="list-group-item" target="profile">
                        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                            Thay đổi ảnh đại diện</a>
                        <a href="" class="list-group-item" target="profile">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            Đăng xuất</a>
                    </div>
                    

                </div>
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <iframe src="profile/thongtin.php" frameborder="0" width="100%" height="700px" name="profile"></iframe>
            </div>
            
            
        </div>
    </div>
</body>
</html>