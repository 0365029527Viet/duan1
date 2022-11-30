<?php


    function insert_tk($hoten,$pass,$email,$phone,$adress){
        $sql ="insert into taikhoan(name,pass,email,phone,address) values ('$hoten','$pass','$email','$phone','$adress')";
        pdo_execute($sql);
    }
    function login($email,$pass){
        $sql = "select * from taikhoan where email = '$email' AND pass = '$pass'";
        $dn = pdo_query_one($sql);
        return $dn;
    }
    function load_tk($id){
        $sql = "select * from taikhoan where id = '$id'";
        $dn = pdo_query_one($sql);
        return $dn;
    }
    // function qmk($email){
    //     $sql = "select * from taikhoan where email = '$email'";
    //     $dn = pdo_query_one($sql);
    //     return $dn;
    // }
    function update_tk($id,$name,$phone,$diachi,$mota){
        
        $update = "update taikhoan set name='$name',phone='$phone', address ='$diachi', mota= '$mota'  where id='$id'";
        pdo_query_one($update);
        
    }
    function update_avatar($id, $image){
        $sql ="update taikhoan set img='$image' where id = '$id'";
        pdo_execute($sql);
    }

?>