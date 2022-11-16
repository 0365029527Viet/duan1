<div class="container">
    <div class="row">
        <h2 class="text-center">Thêm danh mục</h2>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="index.php?act=danhmuc" method="post" class="formDM">
                
                <input type="text" name="tendanhmuc" id="input" class="form-control" required="required" placeholder="Tên danh mục"> <br>
                
                
                <button type="submit" class="btn btn-success" name="btn_add">Thêm danh mục</button>
                
                <a href="index.php?act=viewdm" class="btn btn-success" name="btn_view">Xem danh mục</a>
                <button type="reset" class="btn btn-success">Nhập lại</button>
            </form>
        </div>
        
    </div>
</div>