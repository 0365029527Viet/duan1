<?php 
    session_start();
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "view/header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
            switch ($act) {
                case 'dangnhap':
                    if(isset($_POST['dangnhap'])){
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $checkuser= login($email,$pass);
                        if(is_array($checkuser)){
                            $_SESSION['user'] = $checkuser;
                            echo "<script>alert('Đang nhập thành công.')</script>";
                            header('location: indexAll.php');
                            
                        }
                        else{
                            echo "<script>alert('Tài khoản không tồn tại.')</script>";
                        }
                    }
                    include "taikhoan/dangnhap.php";
                    break;
                case 'dangki':
                    include "taikhoan/dangki.php";
                    break;
                case 'doan':
                    include "view/doan.php";
                    break;
                default:
                    include "view/home.php";
                    break;
            }
    
    }else{
        include"view/home.php";
    }
?>