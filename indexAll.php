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
                    if(isset($_POST['dangki'])){
                        $hoten = $_POST['hoten'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $adress = $_POST['adress'];
                        $pass = $_POST['pass'];
                        insert_tk($hoten,$pass,$email,$phone,$adress);
                        header('location: indexAll.php?act=dangnhap');
                        echo "<script>alert('Đăng kí thành công. Vui lòng đăng nhập để trải nghiệm dịch vụ !')</script>";
                    }
                    include "taikhoan/dangki.php";
                    break;
                case 'dangxuat':
                    session_unset();
                    header('location: indexAll.php');
                    include "taikhoan/dangki.php";
                    break;
                case 'quenmk':
                    include "taikhoan/quenmk.php";
                    break;
                case 'doan':
                    
                    include "review/trangmieng.php";
                    break;
                default:
                    include "view/home.php";
                    break;
            }
    
    }else{
        include"view/home.php";
    }
?>