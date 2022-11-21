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
    // function qmk($email){
    //     $sql = "select * from taikhoan where email = '$email'";
    //     $dn = pdo_query_one($sql);
    //     return $dn;
    // }
    // function update_tk($id,$user,$pass,$email,$diachi,$phone){
        
    //     $update = "update taikhoan set user='$user', pass='$pass', email='$email', diachi='$diachi', phone='$phone' where id='$id'";
    //     pdo_query_one($update);
        
    // }

?>