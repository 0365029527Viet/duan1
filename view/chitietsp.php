<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .detail{
            width: 100%;
            height: 300px;
            background-color: rgb(255, 255, 255);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .detail img{
            margin-left: 0px;
            transform: translate(-15px);
        }
        .detail span{
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
        .content{
            width: 100%;
            height: 500px;
            background-color: #fff;
        }
        hr{
            width: 80%;
            border: 1px solid rgb(179, 179, 179);
        }
        .name img{
            border-radius: 50%;
        }
        .point span{
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
                foreach ($resuft as $key => $value) {
                    
                
           ?>
           
            <div class="detail">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="admin/admin_review/sanpham/img/<?php echo $value['anh'] ?>" alt="" width="100%" height="300">
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <br>
                    <p><?php echo $value['khuvuc'] ?></p>
                    <b><?php echo $value['tensp'] ?></b>
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
               <?php  } ?>
           </div>
    </div> <br>
    <div class="container">
        <div class="row">         
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                   <div class="row">
                   <div class="list-group">
                        <a href="indexAll.php" class="list-group-item">Trang chủ</a>
                        <a href="#" class="list-group-item">Bình luận</a>
                        <a href="#" class="list-group-item">Sản phẩm khác</a>
                    </div>  
                   </div>                 
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="binhluan" style="background-color: #fff; margin: 0 10px 10px 30px;">
                <h3 class="text-center">Bình luận</h3>
            </div><script>
                $(document).ready(function(){                        
                    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                });
            </script>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="comment text-center">
                    <div class="input-group">
                
                        <div class="input-group">
                            
                            <div class="input-group">
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Search">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default">Go!</button>
                                </span>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <iframe src="" frameborder="0" width="100%" height="500px"></iframe>
            </div>
            
        </div>
    </div>
</body>
</html>
