<?php
    include "model/danhmuc.php";
?>
<div class="container home">
        <div class="row">          
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="navbar nav-home">
                    <i class="glyphicon glyphicon-cutlery"></i>
                    <a class="navbar-brand" href="#"></i>Giao hàng tận nơi</a>
                    <ul class="nav navbar-nav">
                        <li><a href="">Tất cả</a></li>
                        <?php 
                            $rows = load_dm_admin();
                            foreach ($rows as $key => $value) {
                            
                        ?>
                        <li>
                            <a href=""><?php echo $value['tendanhmuc'] ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>
    </div> <br> <br>
    <?php
        include "review.php";
    ?>