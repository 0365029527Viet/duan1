<?php
    function tongdonhang(){
        $tong = 0;
            foreach ($_SESSION['giohang'] as $mycart) {
                $ttien = $mycart[3]*$mycart[4];
                $tong+=$ttien;
                }
                return tongdonhang();
    }
    
    function insert_bill($tenkhachhang,$phone,$diachi,$time,$pttt,$tongdonhang){
        $sql ="insert into bill(tenuser,phone,diachi,time,pttt,tongdonhang) values ('$tenkhachhang','$phone','$diachi','$time','$pttt','$tongdonhang')";
        return pdo_execute_lastInsertId($sql);
    }
    function insert_cart($id_user,$idpro,$tensp,$anh,$gia,$soluong,$thanhtien,$idbill){
        $sql ="insert into cart(id_user,idpro,tensp,anh,gia,soluong,thanhtien,id_bill) values ('$id_user','$idpro','$tensp','$anh','$gia','$soluong','$thanhtien','$idbill')";
    }
    function load_onebill($idbill){
        $sql = "select * from bill where id='$idbill'";
        $resufl = pdo_query($sql);
        return $resufl;
    }
?>