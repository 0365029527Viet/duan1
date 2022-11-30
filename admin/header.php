<?php
                // session_start();
                include "../model/pdo.php";
                include "../model/danhmuc.php";
                include "../model/sanpham.php";
                // include "header.php";
                if(isset($_GET['act'])){
                    $act = $_GET['act'];
                    switch ($act) {
                        case 'danhmuc':
                            if(isset($_POST['btn_add'])){
                                $tendanhmuc= $_POST['tendanhmuc'];
                                insert_dm($tendanhmuc);
                            }
                            include "../admin/admin_review/danhmuc/addm.php";
                            break;
                        case 'viewdm':
                            $row = load_dm_admin();
                            include "../admin/admin_review/danhmuc/viewdm.php";
                            break;
                        case 'xoadm':
                            
                            if(isset($_GET['id'])&&($_GET['id'])>0){
                                $id = $_GET['id'];
                                delete_dm($id);
                            }
                            $row = load_dm_admin();
                            include "../admin/admin_review/danhmuc/viewdm.php";
                            break;
                        case 'editdm':
                            if(isset($_GET['id'])&&($_GET['id'])>0){
                                $sql = "select * from danhmuc where id =".$_GET['id'];
                                $rows=pdo_query_one($sql);
                            }
                            include "../admin/admin_review/danhmuc/editdm.php";
                            break;
                        case 'updatedm':
                            if(isset($_POST['updatedm'])){
                                $id = $_POST['id'];
                                $tendanhmuc = $_POST['tendanhmuc'];
                                updatedm($tendanhmuc,$id);
                            }
                            $row = load_dm_admin();
                            include "../admin/admin_review/danhmuc/viewdm.php";
                            break;
                        // danh mục-END.
                        case 'addsp':
                            $rows = load_dm();
                            if(isset($_POST['addsp'])){
                                $tensp = $_POST['tensp'];
                                $gia = $_POST['gia'];
                                $khuvuc = $_POST['khuvuc'];
                                $diachi = $_POST['diachi'];
                                $Thoigianmo = $_POST['Thoigianmo'];
                                $Thoigiandong = $_POST['Thoigiandong'];
                                $diemphucvu = $_POST['diemphucvu'];
                                $diemchatluong = $_POST['diemchatluong'];
                                $diemvitri = $_POST['diemvitri'];
                                $diemkhonggian = $_POST['diemkhonggian'];
                                $diemgiaca = $_POST['diemgiaca'];
                                $tongdiem = ($diemphucvu+$diemchatluong+$diemvitri+$diemkhonggian+$diemgiaca)/5;
                                $iddm = $_POST['iddm'];
                                if(isset($_FILES['image'])){
                                    $taget_dir = "admin_review/sanpham/img/";
                                    $image = $_FILES['image']['name'];
                                    $taget_file = $taget_dir.$image;
                                    if(move_uploaded_file($_FILES['image']['tmp_name'],$taget_file)){
                                        echo "upload thanh cong" . $taget_file;
                                    }
                                }
                                insert_sp($tensp,$image,$gia,$khuvuc,$diachi,$Thoigianmo,$Thoigiandong,$diemphucvu,$diemchatluong,$diemvitri,$diemkhonggian,$diemgiaca,$tongdiem,$iddm);
                            }
                            include "../admin/admin_review/sanpham/add.php";
                            break;
                        case 'viewsp':
                            $rows = load_sp_admin();
                            include "../admin/admin_review/sanpham/view.php";
                            break;
                        case 'xoasp':
                            if(isset($_GET['id'])&&($_GET['id'])>0){
                                $id = $_GET['id'];
                                delete_sp($id);
                            }
                            $rows = load_sp_admin();
                            include "../admin/admin_review/sanpham/view.php";
                            break;
                        case 'comment':
                                include "comment.php";
                                break;
                        case 'taikhoan':
                            include "taikhoan.php";
                            break;
                        case 'thongke':
                            include "thongke.php";
                            break;
                        // case 'dangxuat':
                        //     session_unset();
                        //     header("location: ../indexAll.php");
                        //     break;
                        default:
                            include "home.php";
                            break;
                    }
                }else{
                    include "home.php";
                }
            ?>