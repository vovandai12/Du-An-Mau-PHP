<div class="row margin-bottom">
    <div class="boxtrai margin-right">
        <div class="row">
            <div class="row margin-bottom">
                <div class="boxtieuDe">
                    ĐĂNG KÝ THÀNH VIÊN
                </div>
                <div class="boxnoiDung row">
                    <form action="index.php?act=dangky" method="post">
                        <div class="row margin-bottom10">
                            Tên đăng nhập: <br>
                            <input type="text" name="user" id="">
                        </div>
                        <div class="row margin-bottom10">
                            Email: <br>
                            <input type="text" name="email" id="">
                        </div>
                        <div class="row margin-bottom10">
                            Mật Khẩu: <br>
                            <input type="password" name="pass" id="">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="reset" value="Nhập lại">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="submit" value="Đăng ký" name="submit">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="submit" value="Trở về trang chủ" name="trove">
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

