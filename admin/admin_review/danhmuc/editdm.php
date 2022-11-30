<?php
    if(is_array($rows)){
        extract($rows);
    }
?>
<div class="container">
    <div class="row">
        <h2 class="text-center">Sửa danh mục</h2>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="index.php?act=updatedm" method="post">
                
                <input type="text" name="tendanhmuc" value="<?php echo $rows['tendanhmuc']; ?>" id="input" class="form-control" required="required" placeholder="Tên danh mục"> <br>
                
                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                <button type="submit" class="btn btn-success" name="updatedm">Update danh mục</button>
                
                <a href="index.php?act=viewdm" class="btn btn-success" name="btn_view">Xem danh mục</a>
                <button type="reset" class="btn btn-success">Nhập lại</button>
            </form>
        </div>
        
    </div>
</div>