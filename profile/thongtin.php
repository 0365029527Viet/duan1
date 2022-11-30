<?php
    include "../model/pdo.php";
    include "../model/taikhoan.php";
?>
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
        body{
            background-color: rgb(255, 255, 255);
            height: auto;
            /* border: 1px solid black; */
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center">Thông tin cá nhân</h1>
                <?php 
                    session_start();
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                    
                ?>  
                <form action="" method="post">
                
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label>Họ và tên</label>
                    <input type="text" name="name" id="input" class="form-control" value="<?php echo $name; ?>" required="required">
                    <label>Email</label>
                    <input type="text" name="email" id="input" class="form-control" value="<?php echo $email; ?>" required="required" disabled>
                    <label>Số điện thoại</label>
                    <input type="text" name="phone" id="input" class="form-control" value="<?php echo $phone; ?>" required="required">
                    <label>Địa chỉ</label>
                    <input type="text" name="diachi" id="input" class="form-control" value="<?php echo $address; ?>" required="required">
                    <label>Mô tả bản thân</label>
                    <textarea name="mota" id="input" class="form-control" rows="3" required="required"><?php echo $mota; ?></textarea> <br>
                    <button type="submit" class="btn btn-primary" name="update_profile">Lưu thay đổi</button>
                </form>
                <?php } ?>
                <?php
                    if(isset($_POST['update_profile'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $diachi = $_POST['diachi'];
                        $mota = $_POST['mota'];
                        update_tk($id,$name,$phone,$diachi,$mota);
                        echo "cap nhat thanh cong";
                    }
                ?>
            </div>
        </div>
        
    </div>
</body>
</html>