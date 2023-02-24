<div class="row">
            <div class="row header">
                <h1>Thêm mới loại hàng hoá</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row margin-bottom10">
                        Mã loại <br>
                        <input type="text" name="maLoai" id="" disabled>
                    </div>
                    <div class="row margin-bottom10">
                        Tên loại <br>
                        <input type="text" name="tenLoai" id="">
                    </div>
                    <div class="row margin-bottom">
                        <input type="submit" value="Thêm mới" name="themMoi">
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