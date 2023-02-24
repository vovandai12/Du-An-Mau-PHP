<div class="row margin-bottom">
    <div class="boxtrai margin-right">
        <div class="row">
            <div class="row margin-bottom">
                <div class="boxtieuDe">
                    SỬA TÀI KHOẢN
                </div>
                <div class="boxnoiDung row">
                    <?php
                    if (isset($check) && (is_array($check))) {
                        extract($check);
                    }
                    ?>
                    <form action="index.php?act=capnhat" method="post">
                        <div class="row margin-bottom10">
                            Username: <br>
                            <input type="text" name="user" id="" value="<?=$user?>">
                        </div>
                        <div class="row margin-bottom10">
                            Email: <br>
                            <input type="text" name="email" id="" value="<?=$email?>">
                        </div>
                        <div class="row margin-bottom10">
                            Pass: <br>
                            <input type="password" name="pass" id="" value="<?=$pass?>">
                        </div>
                        <div class="row margin-bottom10">
                            Address: <br>
                            <input type="text" name="address" id="" value="<?=$address?>">
                        </div>
                        <div class="row margin-bottom10">
                            Phone: <br>
                            <input type="text" name="phone" id="" value="<?=$phone?>">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="reset" value="Nhập lại">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="submit" value="Cập nhật" name="submit">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="submit" value="Trở về trang chủ" name="trove">
                        </div>
                    </form>
                    <h6>

                    </h6>
                </div>
            </div>

        </div>
    </div>
</div>