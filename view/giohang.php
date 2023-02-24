<div class="row margin-bottom">
    <div class="boxtieuDe">
        Giỏ hàng
    </div>
    <div class="boxnoiDung row">

        <div class="row margin-bottom10 danhSachLoaiHang">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Sản phẩm</th>
                    <th>Hình</th>
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
        <a href="index.php?act=bill"><input type="button" value="Đồng ý đặt hàng"></a>
        <a href="index.php?act=delcart"><input type="button" value="Xoá giỏ hàng"></a>
    </div>
</div>