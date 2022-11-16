<div class="container review">
    <div class="row">
    <a href="index.php?act=viewsp" class="btn btn-success" style="margin: 0 auto;">View sản phẩm</a>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" class="formSP">
            <h1 class="text-center">Thêm sản phẩm</h1>
            
            <div class="input-group">
                <label>Tên sản phẩm</label>
                <input type="text" name="tensp">
            </div>
            <div class="input-group">
                <label>Ảnh sản phẩm</label>
                <input type="file" name="image">
            </div>
            <div class="input-group">
                <label>Giá sản phẩm</label>
                <input type="text" name="gia">
            </div>
            <div class="input-group">
                <label>Khu vực</label>
                <input type="text" name="khuvuc">
            </div>
            <div class="input-group">
                <label>Địa chỉ</label>
                <input type="text" name="diachi">
            </div>
            <div class="input-group">
                <label>Thời gian mở cửa</label>
                <input type="time" name="Thoigianmo">
            </div>
            <div class="input-group">
                <label>Thời gian đóng cửa</label>
                <input type="time" name="Thoigiandong">
            </div>
            <div class="input-group">
                <label>Điểm phục vụ</label>
                <input type="number" min="0" max="10" name="diemphucvu">
            </div>
            <div class="input-group">
                <label>Điểm chất lượng</label>
                <input type="number" min="0" max="10" name="diemchatluong">
            </div>
            <div class="input-group">
                <label>Điểm vị trí</label>
                <input type="number" min="0" max="10" name="diemvitri">
            </div>
            <div class="input-group">
                <label>Điểm không gian</label>
                <input type="number" min="0" max="10" name="diemkhonggian">
            </div>
            <div class="input-group">
                <label>Điểm giá cả</label>
                <input type="number" min="0" max="10" name="diemgiaca">
            </div>
            <div class="input-group">
                <label style="display: flex;">Danh mục</label>
                <select name="iddm" id="input" class="form-control" style="width: 500px;">
                <?php
                        foreach ($rows as $key => $value) {
                ?>
                
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['tendanhmuc'] ?></option>
                
                <?php } ?>
                </select>
            </div>
            <div class="input-group">
                <button type="submit" class="btn btn-success" name="addsp">Thêm</button> <br>
            </div>
            <div class="input-group">               
                <button type="reset" class="btn btn-success">Nhập lại</button>
            </div>
        </form>
        
    </div>
</div>