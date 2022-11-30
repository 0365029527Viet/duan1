
<?php 
// function load_bl($id){
//     $sql = "select * from binhluan where idpro='$id' limit 1";
//     $resufl = pdo_query($sql);
//     return $resufl;
// }
// function load_user_bl($iduser){
//     $sql = "select * from taikhoan where id='$iduser' limit 1";
//      $resufl = pdo_query($sql);
//      return $resufl;
//  }
        function insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan){
            $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
            pdo_execute($sql);
        }

        function loadall_binhluan($idpro){
            $sql = "select * from binhluan where 1";
            if($idpro > 0) $sql.=" and idpro = '".$idpro."'";
            $sql.=" order by id";
            $listbl =pdo_query($sql);
            return $listbl;
        }
?>
