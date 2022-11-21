<div class="container-fluid">
    <div class="row">
        <h2>Trang chủ</h2>
    </div>
    <div class="row">
        
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="danhmuc">
                    <div class="pull-left">
                    <h3 style="font-weight: 1000; margin-top: 10px;">
                    <?php
                        $row = load_dm_admin();
                        echo count($row);
                    ?>
                    </h3>
                    <h3>Danh mục</h3>
                    </div>
                    <div class="pull-right">
                        
                        <span class="glyphicon glyphicon-list" aria-hidden="true" style="font-size: 60px; margin-top: 20px; margin-right: 10px; opacity: 0.7;"></span>
                        
                    </div>
                </div>
                <div class="chitiet text-center">
                    <a href="index.php?act=viewdm">Chi tiết 
                    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="sanpham" style="width: 100%;height: 100px;background-color:#9b59b6;color: white;">
                    <div class="pull-left">
                    <h3 style="font-weight: 1000; margin-top: 10px; margin-left: 20px;">
                    <?php
                        $row = load_sp_admin();
                        echo count($row);
                    ?>
                    </h3>
                    <h3 style="margin-left: 20px;">Sản phẩm</h3>
                    </div>
                    <div class="pull-right">
                        
                        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="font-size: 60px; margin-top: 20px; margin-right: 10px; opacity: 0.7;"></span>
                        
                    </div>
                </div>
                <div class="chitiet text-center" style="background-color:#95a5a6;">
                    <a href="index.php?act=viewsp">Chi tiết 
                    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
        </div>
        
        
        
    </div>
</div>