<?php

    function insert_sp($tensp,$image,$gia,$khuvuc,$diachi,$Thoigianmo,$Thoigiandong,$diemphucvu,$diemchatluong,$diemvitri,$diemkhonggian,$diemgiaca,$tongdiem,$iddm){
        $sql ="insert into spReview values (null, '$tensp','$image','$gia','$khuvuc','$diachi','$Thoigianmo','$Thoigiandong','$diemphucvu','$diemchatluong','$diemvitri','$diemkhonggian','$diemgiaca','$tongdiem','$iddm')";
        pdo_execute($sql);
        //thêm sản phẩm
    }
    function delete_sp($id){
        $sql = "delete from spReview where id ='$id'";
        pdo_execute($sql);
        //xóa sản phẩm
    }
    function load_sp_admin(){
        $sql = "select * from spReview";
        $resufl = pdo_query($sql);
        return $resufl;
        //load sản phẩm
    }
    function load_sp(){
        $sql = "select * from spReview order by id desc";
        $resufl = pdo_query($sql);
        return $resufl;
        //load sản phẩm mới nhất
    }
    function load_sp_limit(){
        $sql = "select * from spReview order by id desc limit 6";
        $resufl = pdo_query($sql);
        return $resufl;
        //load 6 sản phẩm mới nhất 
    }
    function load_one_sp($id){
        $sql = "select * from spReview where id='$id'";
        $resufl = pdo_query($sql);
        return $resufl;
    }
    function load_sp_ct(){
        $sql = "select * from spReview limit 3";
        $resufl = pdo_query($sql);
        return $resufl;
    }

    function load_sp_doan(){
        $sql = "select * from spReview where iddm=10";
        $resufl = pdo_query($sql);
        return $resufl;
        //load sản phẩm đồ ăn
    }
    function load_sp_douong(){
        $sql = "select * from spReview where iddm=9";
        $resufl = pdo_query($sql);
        return $resufl;
        //load sản phẩm đồ uống
    }
    function load_sp_banhkem(){
        $sql = "select * from spReview where iddm=12";
        $resufl = pdo_query($sql);
        return $resufl;
        //load sản phẩm bánh kem
    }
    // function loadall_tk(){
    //     $sql = "select danhmuc.id as madm, danhmuc.tendanhmuc as tendm, count(sanpham.id) as countsp, min(sanpham.gia) as mingia ,max(sanpham.gia) as maxgia, avg(sanpham.gia) as giatb from sanpham left join danhmuc on danhmuc.id=sanpham.iddm
    //     group by danhmuc.id desc";
    //     $listtk = pdo_query($sql);
    //     return $listtk;
    // }
    
    
    ?>