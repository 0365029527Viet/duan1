<!-- <?php
    include "../model/taikhoan.php";
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login{
            margin: 0 auto;
            width: 500px;
            height: 600px;
            background-color: rgb(240, 226, 226);
        }
        .input-group{
            margin-left: 100px;
            padding: 10px;
        }
        .input-group i{
            position: absolute;
            transform: translateY(57px);
        }
        .input-group label{
            font-size: 20px;
        }
        .input-group input{
            width: 250px;
            border: none;
            background-color: transparent;
            border-bottom: 1px solid #fff;
            outline: none;
            height: 40px;
            padding: 0 12px 0 20px;
        }
        .input-group button{
            width: 250px;
        }
        .home{
            margin: 0 auto;
            width: 500px;
        }
        .footer{
            width: 100%;
            height: 100px;
            background-color:  rgb(206, 206, 206);
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row home">
            <div class="login">
                <h1 class="text-center">Login</h1> <hr>
                <form action="indexAll.php?act=dangnhap" method="post">
                    <div class="input-group">
                        <label>Email</label> <br>
                        <i class="glyphicon glyphicon-envelope"></i>
                        <input type="text" placeholder="Nhập email" name="email">
                    </div>
                    <div class="input-group">
                        <label>Pass</label> <br>
                        <i class="glyphicon glyphicon-eye-close"></i>
                        <input type="password" placeholder="Nhập password" name="pass">
                    </div>
                    
                    <br> <br>
                    
                    <div class="input-group">
                        <button type="submit" class="btn btn-success" name="dangnhap">Đăng nhập</button>
                    </div>
                    <br>
                <p style="margin-left: 100px;">Bạn chưa có tài khoản? <a href="indexAll.php?act=dangki">Đăng kí</a> ngay.</p>
                <p><a href="indexAll.php?act=quenmk" style="margin-left: 100px;">Quên mật khẩu</a>?</p>
                    
                </form> 








            </div>
            <p class="text-center" style="margin: 0 auto; width: 500px;">Chúng tôi không sử dụng thông tin của bạn với bất kỳ mục đích nào. Bằng cách đăng nhập hoặc đăng ký, bạn đồng ý với <a href="#">Chính sách quy định của Foody</a></p> <br>
            <hr>
            <p class="text-center">
                Một tài khoản Foody để truy cập tất cả sản phẩm của Foody Corp.
            </p>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            </div>
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src="../image/foody.png" alt=""> 
                <p><a href="">foody.vn</a></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src="../image/foody.png" alt="">
                <p><a href="">foody.vn</a></p>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                
            </div>

        </div>
    </div> <br> <br> <br>
    <div class="footer">
        <p class="text-center" style="margin: 0 auto; width: 500px;">
            ©2022 Foody Corporation. Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội
            Số giấy phép ĐKKD: 0311828036 do sở Kế hoạch và Đầu Tư TPHN cấp ngày 11/06/2012
        </p>
    </div>
</body>
</html>