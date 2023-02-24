<div class="row">
            <div class="row header margin-bottom">
                <h1>Danh sách sản phẩm</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw" id="">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                                foreach ( $listDanhMuc as $danhMuc){
                                    extract($danhMuc);
                                    if($iddm == $id){
                                        echo '<option value="'.$id.'"selected>'.$tenDanhMuc.'</option>';
                                    }else{
                                        echo '<option value="'.$id.'">'.$tenDanhMuc.'</option>';
                                    }
                                    
                                }
                    ?>
                </select>
                <input type="submit" name="submit" value="Duyệt">
            </form>
            <div class="row formcontent">
                <form action="#" method="post">
                    <div class="row margin-bottom10 danhSachLoaiHang">
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ SẢN PHẨM</th>
                                <th>HÌNH SẢN PHẨM</th>
                                <th>LƯỢT XEM</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listsanPham as $sanPham){
                                    extract($sanPham);
                                    $suasanPham = "index.php?act=suasanPham&id=".$id;
                                    $xoasanPham = "index.php?act=xoasanPham&id=".$id;
                                    $hinhpath = '../upload/'.$img;
                                    if(is_file($hinhpath)){
                                        $hinh = "<img src='".$hinhpath."' height ='80'>";
                                    }else{
                                        $hinh = 'error 404!';
                                    }

                                    echo '<tr>
                                                <td><input type="checkbox" name="" id=""></td>
                                                <td>'.$id.'</td>
                                                <td>'.$ten.'</td>
                                                <td>'.$gia.'</td>
                                                <td>'.$hinh.'</td>
                                                <td>'.$luotxem.'</td>
                                                <td><a href="'.$suasanPham.'"><input type="button" value="Sửa"></a>
                                                <a href="'.$xoasanPham.'"> <input type="button" value="Xoá"></a>
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
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>