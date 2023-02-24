<div class="row">
            <div class="row header">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row margin-bottom10">
                        Danh mục sản phẩm <br>
                        <select name="iddm" id="" >
                            <?php
                                foreach ( $listDanhMuc as $danhMuc){
                                    extract($danhMuc);
                                    echo '<option value="'.$id.'">'.$tenDanhMuc.'</option>';
                                }
                            ?>
                           
                        </select>
                    </div>
                    <div class="row margin-bottom10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="row margin-bottom10">
                        Giá sản phẩm <br>
                        <input type="text" name="giasp" id="">
                    </div>
                    <div class="row margin-bottom10">
                        Hình sản phẩm <br>
                        <input type="file" name="hinhsp" id="">
                    </div>
                    <div class="row margin-bottom10">
                        Mô tả sản phẩm <br>
                        <textarea name="moTasp" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row margin-bottom">
                        <input type="submit" value="Thêm mới" name="themMoi">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongBao) && ($thongBao != '')){
                            echo $thongBao;
                        }
                    ?>
                </form>
            </div>
        </div>