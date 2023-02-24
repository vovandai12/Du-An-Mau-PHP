<div class="row margin-bottom">
    <form action="index.php?act=billcomfrim" method="post">
        <div class="row margin-bottom">
            <div class="boxtieuDe">
                Thông tin đặt hàng
            </div>

            <div class="boxnoiDung row">
                <table>
                    <?php

                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $phone = $_SESSION['user']['phone'];
                    } else {
                        $name = '';
                        $address = '';
                        $email = '';
                        $phone = '';
                    }
                    ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="name" id="" value="<?= $name ?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" id="" value="<?= $address ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" id="" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td><input type="text" name="phone" id="" value="<?= $phone ?>"></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row margin-bottom">
            <div class="boxtieuDe">
                Phương thức thanh toán
            </div>
            <div class="boxnoiDung row">
                <table>
                    <tr>
                        <td><input type="radio" value="1" name="pttt" id="" checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" value="2" name="pttt" id="">Chuyển khoản ngân hàng</td>
                        <td><input type="radio" value="3" name="pttt" id="">Thanh toán online</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row margin-bottom">
            <div class="boxtieuDe">
                Thông tin giỏ hàng
            </div>
            <div class="boxnoiDung row">

                <div class="row margin-bottom10 danhSachLoaiHang">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                        viewcart();
                        ?>

                    </table>
                </div>

            </div>
            <div class="row margin-bottom">
                <input type="submit" value="Tiếp tục đặt hàng" name="dathang">
            </div>
        </div>
    </form>

</div>