<?php
    if(is_array($danhMuc)){
        extract($danhMuc);
    }
?>
<div class="row">
            <div class="row header">
                <h1>Cập nhật hàng hoá loại hàng hoá</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updateDanhMuc" method="post">
                    <div class="row margin-bottom10">
                        Mã loại <br>
                        <input type="text" name="maLoai" id="" disabled>
                    </div>
                    <div class="row margin-bottom10">
                        Tên loại <br>
                        <input type="text" name="tenLoai" value="<?php
                            if(isset($tenDanhMuc) && $tenDanhMuc != ''){
                                echo $tenDanhMuc;
                            }else{
                                echo 'error 404!';
                            }
                        ?>">
                    </div>
                    <div class="row margin-bottom">
                            <input type="hidden" name="id" value="<?php
                            if(isset($id) && $id > 0){
                                echo $id;
                            }else{
                                echo 'error 404!';
                            }
                        ?>">
                        <input type="submit" value="cập nhật" name="capNhat">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongBao) && ($thongBao != '')){
                            echo $thongBao;
                        }
                    ?>
                </form>
            </div>
        </div>