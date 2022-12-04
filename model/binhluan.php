<?php
    function load_bl($id){
        $sql = "select * from binhluan where idpro='$id' limit 1";
        $resufl = pdo_query($sql);
        return $resufl;
    }
    function load_user_bl($iduser){
        $sql = "select * from taikhoan where id='$iduser' limit 1";
         $resufl = pdo_query($sql);
         return $resufl;
     }
     function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan, $tong){
        $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan,tongdiem) values('$noidung','$iduser','$idpro','$ngaybinhluan','$tong')";
        pdo_execute($sql);
    }
    function load_bl_sp($id){
        $sql = "select * from binhluan where idpro='$id'";
        $resufl = pdo_query($sql);
        return $resufl;
    }
    function load_bl_user($id){
        $sql = "select * from taikhoan where id='$id'";
        $resufl = pdo_query($sql);
        return $resufl;
    }
?>