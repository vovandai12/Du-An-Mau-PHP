<div class="row margin-bottom">
    <div class="row margin-bottom">
        <div class="boxtieuDe">
            Cảm ơn
        </div>

        <div class="boxnoiDung row" style="text-align: center;">
            <h2>CẢM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG</h2>
        </div>
    </div>
    <?php
    if (isset($listbill) && (is_array($listbill))) {
        extract($listbill);
    }
    ?>
    <div class="row margin-bottom">
        <div class="boxtieuDe">
            Thông tin đặt hàng
        </div>
        <div class="boxnoiDung row">
            <table>
                <tr>
                    <td>Người đặt hàng: </td>
                    <td><?= $listbill['bill_name'] ?></td>
                </tr>
                <tr>
                    <td>Địa chỉ: </td>
                    <td><?= $listbill['bill_address'] ?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?= $listbill['bill_email'] ?></td>
                </tr>
                <tr>
                    <td>Số điện thoại: </td>
                    <td><?= $listbill['bill_phone'] ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="boxtieuDe">
            Thông tin thanh toán
        </div>
        <div class="boxnoiDung row">
            <table>
                <tr>
                    <td>Mã đơn hàng: </td>
                    <td><?= $listbill['id'] ?></td>
                </tr>
                <tr>
                    <td><?php
                        if($listbill['bill_pttt'] == 1){
                            echo 'Trả tiền khi nhận hàng';
                        }elseif($listbill['bill_pttt'] == 2){
                            echo 'Chuyển khoản ngân hàng';
                        }else{
                            echo 'Thanh toán online';
                        }
                    ?></td>
                </tr>
                <!-- <tr>
                    <td>Số lượng: </td>
                    <td></td>
                </tr> -->
                <tr>
                    <td>Tổng tiền: </td>
                    <td><?= $listbill['total'] ?></td>
                </tr>
                <tr>
                    <td>Ngày đặt hàng: </td>
                    <td><?= $listbill['ngaydathang'] ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row margin-bottom">
        <div class="boxtieuDe">
            Chi tiết giỏ hàng
        </div>
        <div class="boxnoiDung row danhSachLoaiHang">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>

                <?php
                    show_chiTiet($listcart);
                ?>
            </table>
        </div>
    </div>



</div>