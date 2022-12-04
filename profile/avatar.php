<?php
session_start();
    include "../model/taikhoan.php";
    include "../model/pdo.php";
    if(isset($_POST['avatar'])){
        $id = $_POST['id'];
        if(isset($_FILES['image'])){
            $taget_dir = "image/";
            $image = $_FILES['image']['name'];
            $taget_file = $taget_dir.$image;
            if(move_uploaded_file($_FILES['image']['tmp_name'],$taget_file)){
                echo "upload thanh cong" . $taget_file;
            }
            
        }
        update_avatar($id,$image);
        
    }
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
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        }
                    ?>
                    <input type="hidden" value="<?php echo $id ?>" name="id">
                    <div class="form-group">
                        <label for="input" class="col-sm-2 control-label">Avatar:</label>
                        <input type="file" name="image" id="">
                    </div>

                    <button type="submit" class="btn btn-danger" name="avatar">Cập nhập avatar</button>

                </form>

            </div>

        </div>
    </div>
</body>

</html>