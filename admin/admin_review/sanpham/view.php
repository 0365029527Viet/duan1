<div class="container">
    <div class="row">
    <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="text-center">Sản phẩm review</h2>
        <table class="table table-striped table-hover" border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên SP</th>
                    <th>Ảnh </th>
                    <th>Giá </th>
                    <th>Khu vực</th>
                    <th>Địa chỉ</th>
                    <th>Time oppen</th>
                    <th>Time close</th>
                    <th>Điểm phục vụ</th>
                    <th>Điểm chất lượng</th>
                    <th>Điểm vị trí</th>
                    <th>Điểm không gian</th>
                    <th>Điểm giá cả</th>
                    <th>Tổng điểm</th>
                    <th>Id_DM</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($rows as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value['id'] ?></td>
                    <td><?php echo $value['tensp'] ?></td>
                    <td><img src="admin_review/sanpham/img/<?php echo $value['anh']; ?>" alt="" width="50" height="50"></td>
                    <td><?php echo $value['gia'] ?></td>
                    <td><?php echo $value['khuvuc'] ?></td>
                    <td><?php echo $value['diachi'] ?></td>
                    <td><?php echo $value['opentime'] ?></td>
                    <td><?php echo $value['closetime'] ?></td>
                    <td><?php echo $value['diemphucvu'] ?></td>
                    <td><?php echo $value['diemchatluong'] ?></td>
                    <td><?php echo $value['diemvitri'] ?></td>
                    <td><?php echo $value['diemkhonggia'] ?></td>
                    <td><?php echo $value['diemgiaca'] ?></td>
                    <td><?php echo $value['tongdiem'] ?></td>
                    <td><?php echo $value['iddm'] ?></td>
                    <td><a href="index.php?act=xoasp&&id=<?php echo $value['id'] ?>" class="btn btn-success">Xoa</a></td>
                    <td><a href="" class="btn btn-success">Sua</a></td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="index.php?act=addsp" class="btn btn-primary">Thêm sản phẩm</a>
        
    </div>
</div>