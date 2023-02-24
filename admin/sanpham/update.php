<?php
    if(is_array($sanPham)){
        extract($sanPham);
    }

    $hinhpath = '../upload/'.$img;
    if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."' height ='80'>";
    }else{
        $hinh = 'error 404!';
    }
?>
<div class="row">
            <div class="row header">
                <h1>Cập nhật sản phẩm</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row margin-bottom10">
                        <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                                    foreach ( $listDanhMuc as $danhMuc){
                                        extract($danhMuc);
                                        echo '<option value="'.$id.'">'.$tenDanhMuc.'</option>';
                                    }
                        ?>
                        </select>
                    </div>
                    <div class="row margin-bottom10">
                        Mã sản phẩm <br>
                        <input type="text" name="masp" id="" disabled>
                    </div>
                    <div class="row margin-bottom10">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" id="" value="<?=$ten?>">
                    </div>
                    <div class="row margin-bottom10">
                        Giá sản phẩm <br>
                        <input type="text" name="giasp" id="" value="<?=$gia?>">
                    </div>
                    <div class="row margin-bottom10">
                        Hình sản phẩm <br>
                        <input type="file" name="hinhsp" id="">
                        <?=$hinh?>
                    </div>
                    <div class="row margin-bottom10">
                        Mô tả sản phẩm <br>
                        <textarea name="moTasp" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row margin-bottom">
                    <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capNhat">
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