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
                                <th>NOTE</th>
                                <th>IDUSER</th>
                                <th>IDPRO</th>
                                <th>DATE</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($list_binhluan as $binhluan){
                                    extract($binhluan);
                                    $xoabl = "index.php?act=xoabl&id=".$id;
                                   
                                    echo '<tr>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td>'.$id.'</td>
                                                <td>'.$noidung.'</td>
                                                <td>'.$iduser.'</td>
                                                <td>'.$idpro.'</td>
                                                <td>'.$ngaybinhluan.'</td>
                                                <td>
                                                <a href="'.$xoabl.'"> <input type="button" value="Xoá"></a>
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
                    </div>
                </form>
            </div>
        </div>