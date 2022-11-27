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
    
?>