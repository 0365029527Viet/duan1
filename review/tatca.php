<?php
    include "../model/pdo.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
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
    <style>
        /* .item a{
            position: absolute;
            transform: translate(75%);
            opacity: 0;
            transition: 0.9 all;
        }
        .item:hover a{
            top: 25%;
            opacity: 1;
        } */
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
                <?php
                    $row = load_sp();
                    foreach ($row as $key => $value) {

                ?>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin-bottom: 20px;">
                
                 <div class="card" style="background-color: #ecf0f1;">
                    <div class="item">
                        <img class="card-img-top img-responsive" src="../admin/admin_review/sanpham/img/<?php echo $value['anh'] ?>" alt="Card image cap">
                        <!-- <a href="" class="btn btn-default">Đặt hàng 
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                        </a> -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="margin-left: 5px;"><b><p style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden; color: rgb(104, 104, 104);"><a href='../index.php?act=chitiet&&id=<?php echo $value['id']; ?>' target='chitiet'>
                            <?php echo $value['tensp'] ?>
                        </a></p></b></h5>
                        <p class='card-text' style='color: #858585; margin-left: 5px; padding-bottom: 0px;text-overflow: ellipsis; white-space: nowrap; overflow: hidden; color: rgb(104, 104, 104);'><?php echo $value['diachi'] ?></p>
                        <p class="" style="width: 100%; height: 40px; margin-left: 10px;">
                                <?php
                                    $id = $value['id'];
                                    $rows = load_bl($id);
                                    foreach ($rows as $key => $value) {
                                        $iduser = $value['iduser'];
                                        $row = load_user_bl($iduser);
                                        foreach ($row as $key => $values) {
                                            if($values['img'] == 0){
                                                echo "<img src='../image/user-default-female.png' width='20' style='border-radius: 50%;''>"." ";;
                                            }
                                            echo $values['name']." : ";
                                        }
                                        echo $value['noidung'];
                                    }
                                ?>
                            
                        </p> <hr>
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