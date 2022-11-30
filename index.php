<?php 
    session_start();
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "view/header.php";
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
                default:
                include "view/home.php";
                break;
        }

}else{
    include"view/home.php";
}
?>