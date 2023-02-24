<div class="row margin-bottom">
    <div class="boxtieuDe">
        TÀI KHOẢN
    </div>
    <div class="boxnoiDung formtaiKhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row margin-bottom10">
                <h1>Bạn đã đăng nhập thành công</h1>
            </div>
            <div class="row margin-bottom10">
                Xin chào bạn <a href="#"><?= $user ?></a><br>
            </div>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=thoat">Thoát tài khoản</a></li>
            <li><a href="index.php?act=capnhat">Sửa thông tin cá nhân</a></li>
            <li><a href="#">Xoá tài khoản</a></li>
        <?php
        } else {
        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row margin-bottom10">
                    Tên đăng nhập: <br>
                    <input type="text" name="user" id="">
                </div>
                <div class="row margin-bottom10">
                    Mật Khẩu: <br>
                    <input type="password" name="pass" id="">
                </div>
                <div class="row margin-bottom10">
                    <input type="checkbox" name="check" id="">Ghi nhớ tài khoản ?
                </div>
                <div class="row margin-bottom10">
                    <input type="submit" name="dangnhap" value="Đăng nhập" onclick="myFunction()">
                </div>
            </form>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
        <?php } ?>
    </div>
</div>
<div class="row margin-bottom">
    <div class="boxtieuDe">
        DANH MỤC
    </div>
    <div class="boxnoiDung2 menu2">
        <ul>
            <?php
            foreach ($danhmuc as $dm) {
                extract($dm);
                $linkdm = 'index.php?act=sanpham&id=' . $id;
                echo '<li>
                                        <a href="' . $linkdm . '">' . $tenDanhMuc . '</a>
                                    </li>';
            }
            ?>
            <!-- <li>
                        <a href="#">Đồng hồ</a>
                    </li>
                    <li>
                        <a href="#">Điện thoại</a>
                    </li>
                    <li>
                        <a href="#">lap top</a>
                    </li>
                    <li>
                        <a href="#">Ba lô</a>
                    </li> -->
        </ul>
    </div>
    <div class="boxtimKiem search-box">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="search" id="">
            <input type="submit" name="submit" value="Tìm kiếm">
        </form>
    </div>
</div>
<div class="row margin-bottom">
    <div class="boxtieuDe">
        TOP 10 YÊU THÍCH
    </div>
    <div class="boxnoiDung row">
        <?php
        foreach ($dstop10 as $top10) {
            extract($top10);
            $img = $img_path . $img;
            $linksp = 'index.php?act=spchitiet&idsp=' . $id;
            echo '<div class="row margin-bottom10 top10">
                                    <img src="' . $img . '" alt="">
                                    <a href="' . $linksp . '">' . $ten . '</a>
                                </div>';
        }
        ?>
        <!-- <div class="row margin-bottom10 top10">
                    <img src="images/1.jpg" alt="">
                    <a href="#">Sản phẩm 1</a>
                </div>
                <div class="row margin-bottom10 top10">
                    <img src="images/5.jpg" alt="">
                    <a href="#">Sản phẩm 2</a>
                </div>
                <div class="row margin-bottom10 top10">
                    <img src="images/3.jpg" alt="">
                    <a href="#">Sản phẩm 3</a>
                </div>
                <div class="row margin-bottom10 top10">
                    <img src="images/4.jpg" alt="">
                    <a href="#">Sản phẩm 4</a>
                </div>
                <div class="row margin-bottom10 top10">
                    <img src="images/1.jpg" alt="">
                    <a href="#">Sản phẩm 1</a>
                </div>
                <div class="row margin-bottom10 top10">
                    <img src="images/5.jpg" alt="">
                    <a href="#">Sản phẩm 2</a>
                </div>
                <div class="row margin-bottom10 top10">
                    <img src="images/3.jpg" alt="">
                    <a href="#">Sản phẩm 3</a>
                </div>
                <div class="row margin-bottom10 top10">
                    <img src="images/4.jpg" alt="">
                    <a href="#">Sản phẩm 4</a>
                </div> -->
    </div>
</div>
