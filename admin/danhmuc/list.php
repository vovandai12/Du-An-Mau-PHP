<div class="row">
            <div class="row header">
                <h1>Danh sách loại hàng</h1>
            </div>
            <div class="row formcontent">
                <form action="#" method="post">
                    <div class="row margin-bottom10 danhSachLoaiHang">
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ LOẠI</th>
                                <th>TÊN LOẠI</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listDanhMuc as $danhMuc){
                                    extract($danhMuc);
                                    $suaDanhMuc = "index.php?act=suaDanhMuc&id=".$id;
                                    $xoaDanhMuc = "index.php?act=xoaDanhMuc&id=".$id;
                                    echo '<tr>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td>'.$id.'</td>
                                                <td>'.$tenDanhMuc.'</td>
                                                <td><a href="'.$suaDanhMuc.'"><input type="button" value="Sửa"></a>
                                                <a href="'.$xoaDanhMuc.'"> <input type="button" value="Xoá"></a>
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
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>