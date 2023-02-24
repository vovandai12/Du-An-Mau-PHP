<div class="row margin-bottom">
    <div class="boxtrai margin-right">
        <div class="row">
            <div class="row margin-bottom">
                <div class="boxtieuDe">
                    CẬP NHẬT TÀI KHOẢN
                </div>
                <div class="boxnoiDung row">
                    <?php
                        if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        }
                    ?>
                    <form action="index.php?act=capnhat" method="post">
                        <div class="row margin-bottom10">
                            Tên đăng nhập: <br>
                            <input type="text" name="user" id="" value="<?=$user?>">
                        </div>
                        <div class="row margin-bottom10">
                            Email: <br>
                            <input type="text" name="email" id="" value="<?=$email?>">
                        </div>
                        <div class="row margin-bottom10">
                            Mật Khẩu: <br>
                            <input type="password" name="pass" id="" value="<?=$pass?>">
                        </div>
                        <div class="row margin-bottom10">
                            Địa chỉ: <br>
                            <input type="text" name="address" id="" value="<?=$address?>">
                        </div>
                        <div class="row margin-bottom10">
                            Số điện thoại: <br>
                            <input type="text" name="phone" id="" value="<?=$phone?>">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="reset" value="Nhập lại">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="submit" value="Cập nhât" name="capnhat">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="submit" value="Trở về trang chủ" name="trove">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="hidden" name="id" value="<?=$id?>">
                        </div>
                    </form>
                    <h6>
                        <?php
                            if(isset($thongbao1) && $thongbao1 != ''){
                                echo $thongbao1;
                            }
                        ?>
                    </h6>
                </div>
            </div>
            
        </div>
    </div>
    <div class="boxphai">
        <?php
        include 'view/boxright.php';
        ?>
    </div>
</div>

