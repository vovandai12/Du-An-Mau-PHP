<div class="row">
            <div class="row header margin-bottom">
                <h1>Danh sách tài khoản</h1>
            </div>
            <div class="row formcontent">
                <form action="#" method="post">
                    <div class="row margin-bottom10 danhSachLoaiHang">
                        <table>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>USER</th>
                                <th>PASS</th>
                                <th>EMAIL</th>
                                <th>ADDRESS</th>
                                <th>PHONE</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listtaikhoan as $taikhoan){
                                    extract($taikhoan);
                                    $suataikhoan = "index.php?act=capnhat&id=".$id;
                                    $xoataikhoan = "index.php?act=xoataikhoan&id=".$id;
                                   
                                    echo '<tr>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td>'.$id.'</td>
                                                <td>'.$user.'</td>
                                                <td>'.$pass.'</td>
                                                <td>'.$email.'</td>
                                                <td>'.$address.'</td>
                                                <td>'.$phone.'</td>
                                                <td><a href="'.$suataikhoan.'"><input type="button" value="Sửa"></a>
                                                <a href="'.$xoataikhoan.'"> <input type="button" value="Xoá"></a>
                                                </td>
                                            </tr>';
                                }
                            ?>
                           
                        </table>
                    </div>
                    <div class="row margin-bottom">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xoá các mục đã chọn">
                        <a href="#"><input type="button" value="Nhập thêm tài khoản"></a>
                    </div>
                </form>
            </div>
        </div>