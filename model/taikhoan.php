<?php


    // function insert_tk($user,$pass,$email,$diachi,$phone){
    //     $sql ="insert into taikhoan(user,pass,email,diachi,phone) values ('$user','$pass','$email','$diachi','$phone')";
    //     pdo_execute($sql);
    // }
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