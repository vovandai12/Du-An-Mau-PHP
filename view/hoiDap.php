<div class="row margin-bottom">
    <div class="boxtieuDe">
        Hỏi đáp
    </div>
    <div class="boxnoiDung row">
        <form action="index.php?act=hoidap" method="post" enctype="multipart/form-data">
            
            <div class="row margin-bottom10">
                Tên khách hàng <br>
                <input type="text" name="tenkh" id="">
            </div>
            <div class="row margin-bottom10">
                Địa chỉ <br>
                <input type="text" name="diachi" id="">
            </div>
            <div class="row margin-bottom10">
                Số điện thoại <br>
                <input type="text" name="sdt" id="">
            </div>
            <div class="row margin-bottom10">
                Nội dung cần hỏi <br>
                <textarea name="hoidap" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row margin-bottom">
                <input type="submit" value="Gửi" name="gui">
            </div>
            <h1>
            <?php
            if (isset($thongBao) && ($thongBao != '')) {
                echo $thongBao;
            }
            ?>
            </h1>
        </form>
    </div>
</div>