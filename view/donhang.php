<!-- <?php echo $iddh; ?> -->
<marquee behavior="" direction=""><h3 style="margin: 0;">Cảm ơn quý khách đã đặt hàng. Chúc quý khách ngon miệng</h3></marquee>
<hr style="height: 1px; background-color: green;">
<div class="container-fluid">
    <div class="row">
        <h3 class="text-center">Đơn hàng của bạn</h3>
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
                if(isset($_SESSION['iddh'])){
                    $bill = load_bill($_SESSION['iddh']);
                    foreach ($bill as $key => $value) {
                        ?>
                   

            Họ tên: <?php echo $value['tenkhachhang'] ?>
            <br>
            Số điện thoại: <?php echo "0".$value['phone'] ?>
            <br>
            Địa chỉ nhận hàng: <?php echo $value['diachi'] ?>
            <br>
            Mã đơn hàng: # <?php echo $value['madh'] ?>
            <br>
            Tiền thanh toán: <?php echo $value['tongtien'] ?>
            <br>
            
            Phương thức thanh toán: <?php
                switch ($value['pttt']) {
                    case '1':
                        echo "Thanh toán khi nhận hàng";
                        break;
                    case '2':
                        echo "Thanh toán online";
                        break;
                    case '3':
                        echo "Thanh toán qua thẻ ngân hàng";
                        break;
                    default:
                        
                        break;
                }
            ?>
        </div>
        <?php
                    }
                }
            ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(isset($_SESSION['iddh'])){   
                        $cart = load_cart($_SESSION['iddh']);
                        foreach ($cart as $key => $value) {
                    ?>
                        <tr>

                            <td><?php echo $value['tensp']; ?></td>
                            <td><img src="admin/admin_review/sanpham/img/<?php echo $value['image']; ?>" alt="" width="150" height="100"></td>
                            <td><?php echo $value['dongia']; ?></td>
                            <td><?php echo $value['soluong']; ?></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>    
</div>