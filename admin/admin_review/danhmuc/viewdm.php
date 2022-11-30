
<div class="container-fluid">
<div class="row">
        <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="text-center">Danh mục</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Tên danh mục</th>
                    <th class="text-center">Active</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($row as $key => $value) {
                ?>
                <tr>
                    <td class="text-center"><?php echo $value['id'] ?></td>
                    <td class="text-center"><?php echo $value['tendanhmuc'] ?></td>
                    <td class="text-center">
                        <a href="index.php?act=xoadm&&id=<?php echo $value['id'] ?>" class="btn btn-success">Xóa</a>
                        <a href="index.php?act=editdm&&id=<?php echo $value['id'] ?>" class="btn btn-success">Sửa</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="index.php?act=danhmuc" class="btn btn-success" >Thêm danh mục</a>
        
    </div>
</div>
