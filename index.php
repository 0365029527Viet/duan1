<?php 
    session_start();
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/binhluan.php";
    include "model/cart.php";
    include "model/sanpham.php";
    include "view/header.php";
    if(!isset($_SESSION['giohang']))  $_SESSION['giohang']=[];
    if(isset($_GET['act'])){
        $act = $_GET['act'];
            switch ($act) {
                case 'chitiet':
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        $id = $_GET['id'];
                        $resuft = load_one_sp($id);
                    }
                    include "view/chitietsp.php";
                    break;
                case 'chitietshop':
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        $id = $_GET['id'];
                        $resuft = load_one_sp($id);
                    }
                    include "view/chitietshop.php";
                    
                    break;
                case 'trangcanhan':

                    include "profile/trangcanhan.php";
                    break;
                case 'giohang':
                    if(isset($_POST['dathang'])){
                        $idpro = $_POST['idpro'];
                        $tensp = $_POST['tensp'];
                        $gia = $_POST['gia'];
                        $anh = $_POST['anh'];
                        $soluong = $_POST['soluong'];
                        $tt = $soluong*$gia;
                        $sp = [$idpro,$tensp,$anh,$gia,$soluong,$tt];
                        array_push($_SESSION['giohang'],$sp);
                    }
                    include "view/viewcart.php";
                    break;
                case 'deleCart':
                    if(isset($_GET['id'])&&($_GET['id']>=0)){
                        array_splice($_SESSION['giohang'],$_GET['id'],1);
                    }
                    else{
                        $_SESSION['giohang'] = [];
                    }
                    // 
                    include "view/viewcart.php";
                    die;
                    break;
                case 'thanhtoan':
                    if(isset($_POST['thanhtoan'])){
                        $iduser = $_POST['id'];
                        $tongdonhang = $_POST['tongdonhang'];
                        $tenkhachhang = $_POST['tenkhachhang'];
                        $diachi = $_POST['diachi'];
                        $phone = $_POST['phone'];
                        $pttt = $_POST['inlineRadioOptions'];
                        $madh = rand(0,99999);
                        //tạo đơn hàng và trả về 1 id đơn hàng.
                        
                        $iddh = insert_bill($tenkhachhang,$phone,$iduser,$diachi,$madh,$pttt,$tongdonhang);
                        $_SESSION['iddh'] = $iddh;
                        if($_SESSION['giohang']){
                            foreach ($_SESSION['giohang'] as $value) {
                                addtocart($iddh,$value[0],$value[1],$value[2],$value[4],$value[3]);
                            }
                            unset($_SESSION['giohang']);
                        }
                    }
                    include "view/donhang.php";
                    break;
                case 'donhang':

                    include "view/donhang.php";
                    break;
                default:
                include "view/home.php";
                break;
        }

}else{
    include"view/home.php";
}
