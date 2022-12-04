<?php
    function tongdonhang(){
        $tong = 0;
            foreach ($_SESSION['giohang'] as $mycart) {
                $ttien = $mycart[3]*$mycart[4];
                $tong+=$ttien;
                }
                return tongdonhang();
    }
    
    function insert_bill($tenkhachhang,$phone,$iduser,$diachi,$madh,$pttt,$tongdonhang){
        $sql ="insert into bill(madh,iduser,tenkhachhang,phone,diachi,pttt,tongtien) values ('$madh','$iduser','$tenkhachhang','$phone','$diachi','$pttt','$tongdonhang')";
        return pdo_execute_lastInsertId($sql);
    }
    function addtocart($iddh,$idpro,$tensp,$image,$soluong,$dongia){
        $sql ="insert into cart(iddh,idpro,tensp,image,soluong,dongia) values ('$iddh','$idpro','$tensp','$image','$soluong','$dongia')";
        return pdo_execute_lastInsertId($sql);
    }
    function insert_cart($tensp,$anh,$gia,$soluong){
        $sql ="insert into bill(tensp,anh,gia,soluong,thanhtien) values ('$tensp','$anh','$gia','$soluong')";
    }
    function load_cart($iddh){
        //load cho bảng table
        $sql = "select * from cart where iddh='$iddh'";
        $resufl = pdo_query($sql);
        return $resufl;
    }
    function load_bill($iddh){
        //load cho thông tin người mua
        
        $sql = "select * from bill where id='$iddh'";
        $resufl = pdo_query($sql);
        return $resufl;
    }
    // function load_onebill($idbill){
    //     $sql = "select * from bill where id='$idbill'";
    //     $resufl = pdo_query($sql);
    //     return $resufl;
    // }
?>