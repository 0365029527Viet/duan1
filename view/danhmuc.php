<?php
include "model/danhmuc.php";
include "model/sanpham.php";
?>
<div class="container home">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="navbar nav-home">
                    <i class="glyphicon glyphicon-cutlery"></i>
                    <a class="navbar-brand" href="#"></i>Giao hàng tận nơi</a>
                    <ul class="nav navbar-nav">
                        <li><a href="indexAll.php">Tất cả</a></li>
                        <?php
                        $rows = load_dm_admin();
                        foreach ($rows as $key => $value) {

                        ?>
                            <li>
                                <a href="indexAll.php?act=danhmuc&&iddm=<?php echo $value['id'] ?>"><?php echo $value['tendanhmuc'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="container">
    <div class="row" style="background-color: #fff;">
        <?php
        $row = load_sp_dm($id);
        foreach ($row as $key => $value) {

        ?>
            <div class="col-xs-4 col-sm-4 col-md-2dot4 col-lg-2dot4">
                <div class="card-shop" style="background-color: #ecf0f1; border: 1px solid #EEEE; margin: 10px;">
                    <div class="item">
                        <img class="card-img-top img-responsive img" src="admin/admin_review/sanpham/img/<?php echo $value['anh'] ?>" alt="Card image cap">
                        <a href='index.php?act=chitietshop&&id=<?php echo $value['id']; ?>' class="btn btn-default shop" style="background-color: rgb(255, 91, 91);"> 
                        <span class="glyphicon glyphicon-cutlery" style="font-size: 10px; background-color: #fff; color: red; border-radius: 50%; margin: 0 5px 0 0;"></span>
                         Đặt hàng</a>
                    </div>

                    <div class="card-body-shop">
                        <h5 class="card-title" style="margin-left: 5px;"><b>
                                <p style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden; color: rgb(104, 104, 104);">
                                    <a href='index.php?act=chitietshop&&id=<?php echo $value['id']; ?>' target='chitiet'>
                                        <?php echo $value['tensp'] ?>
                                    </a>
                                </p>
                            </b>
                        </h5>
                        <p class='card-text' style='color: #858585; margin-left: 5px; padding-bottom: 0px;text-overflow: ellipsis; white-space: nowrap; overflow: hidden; color: rgb(104, 104, 104);'>
                            <?php echo $value['diachi'] ?>
                        </p>
                        <hr style="background-color: rgb(163, 163, 163); height: 1px;">
                        <i class="glyphicon glyphicon-tag" style="margin-right: 10px; color: red; margin-bottom: 20px;"></i>Foody.vn
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div> <br>
<?php
include "review.php";
?>

