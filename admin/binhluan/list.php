<div class="row">
            <div class="row frmtitle">
                <H1>DANH SÁCH TÀI KHOẢN</H1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></td>
                            <th>ID</td>
                            <th>NỘI DUNG BÌNH LUẬN</td>
                            <th>Iduser</td>
                            <th>Idpro</td>
                            <th>Ngày binhd luận</td>
                            
                            <th></td>
                        </tr>
                        <?php
                            foreach($listbl as $binhluan){
                                extract($binhluan);
                                $suabl="index.php?act=suabl&id=".$id;
                                $xoabl="index.php?act=xoabl&id=".$id;


                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$noidung.'</td>
                                        <td>'.$iduser.'</td>
                                        <td>'.$idpro.'</td>
                                        <td>'.$ngaybinhluan.'</td>
                                        
                                        <td><a href="'.$suabl.'"><input type="button" value="sửa"></a>  <a href="'.$xoabl.'"><input type="button" value="xóa"></a></td>
                            </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>