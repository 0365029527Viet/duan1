<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
?>
<!DOCTYPE html>
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
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <?php
                    $row = load_sp();
                    foreach ($row as $key => $value) {

                ?>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin-bottom: 20px;">
                
                 <div class="card" style="background-color: #bababa;">
                    <img class="card-img-top img-responsive" src="../admin/admin_review/sanpham/img/<?php echo $value['anh'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-left: 5px;"><b><p><a href="chitietsp.html" target="chitiet" style=""><?php echo $value['tensp'] ?></a></p></b></h5>
                        <p class="card-text" style="color: #858585; padding-bottom: 0px;text-overflow: ellipsis; white-space: nowrap; overflow: hidden; color: rgb(104, 104, 104);"><?php echo $value['diachi'] ?></p>
                        <p class="text-center">Chỗ này của bình luận</p> <hr>
                            <div class="row">    
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="margin-left: 5px;">
                                    <b class="glyphicon glyphicon-comment">11</b>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-3 col-lg-3">
                                    <b class="glyphicon glyphicon-camera ">23</b>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-3 col-lg-3" style="margin-left: 70px;">
                                    <a href=""><b class="glyphicon glyphicon-bookmark">Lưu</b></a>
                                </div>
                            </div> <br>
                    </div>
                </div>
                
            </div>
        <?php } ?>
        </div>
        
    </div>
</body>
</html>