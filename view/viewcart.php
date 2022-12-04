<h2>Giỏ hàng của bạn</h2>
<div class="container-fluid">
    <div class="row">
        <!-- <?php
                echo "<pre>";
                print_r($_SESSION['giohang']);

                ?> -->
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tong = 0;
                    $id = 0;
                    foreach ($_SESSION['giohang'] as $mycart) {
                        $id += 1;
                        $tong += $mycart[5];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $id; ?></th>
                            <td><?php echo $mycart[1]; ?></td>
                            <td><img src="admin/admin_review/sanpham/img/<?php echo $mycart[2]; ?>" alt="" width="150" height="100"></td>
                            <td><?php echo $mycart[3] ?></td>
                            <td><?php echo $mycart[4] ?></td>
                            <td><?php echo $mycart[5] ?></td>
                            <td>
                                <a href="index.php?act=deleCart&&id=<?php echo $id; ?>">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <th scope="row"></th>
                        <td colspan="4">Tổng tiền</td>
                        <td><?php echo $tong; ?></td>
                    </tr>

                </tbody>
            </table>

        </div>

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

            <div class="thanhtoan" style="box-shadow: 10px 10px 10px 10px;">
                <h3 class="text-center" style="margin: 0 0 10px 0;">Thanh toán</h3>
                <form action="index.php?act=thanhtoan" method="post">
                    <?php
                    if (isset($_SESSION['user'])) {
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                            $id = $id;
                            $name = $name;
                            $phone = $phone;
                            $address = $address;
                        }
                            }else{
                                $id = "";
                                $name = "";
                                $phone = "";
                                $address = "";
                            }

                    ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                         <div class="form-group" style="margin: 10px;">
                            <label>Tên khách hàng</label>
                            <input type="text" class="form-control" name="tenkhachhang" value="<?php echo $name; ?>" required>
                        </div>
                        <div class="form-group" style="margin: 10px;">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="phone" value="<?php echo $phone; ?>" required>
                        </div>
                        <div class="form-group" style="margin: 10px;">
                            <label>Địa chỉ nhận hàng</label>
                            <input type="text" class="form-control" name="diachi" value="<?php echo $address; ?>" required>
                        </div>

                    <div class="form-check form-check-inline" style="margin: 10px;">
                        <label>Phương thức thanh toán</label> <br>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Thanh toán khi nhận hàng</label>
                    </div>
                    <div class="form-check form-check-inline" style="margin: 10px;">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">Thanh toán bằng thẻ ngân hàng</label>
                    </div>
                    <div class="form-check form-check-inline" style="margin: 10px;">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">Thanh toán online</label>
                    </div>

                    <p style="margin: 10px;">
                        Tổng tiền thanh toán: <?php echo $tong; ?> <input type="hidden" value="<?php echo $tong; ?>" name="tongdonhang">
                    </p>
                    
                    <button type="submit" class="btn btn-primary" style="margin-left: 43%; margin-bottom: 10px;" name="thanhtoan">Thanh toán</button>         

                </form>
            </div>
        </div>


    </div>
</div>