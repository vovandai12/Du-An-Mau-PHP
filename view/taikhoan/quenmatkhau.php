<div class="row margin-bottom">
    <div class="boxtrai margin-right">
        <div class="row">
            <div class="row margin-bottom">
                <div class="boxtieuDe">
                    QUÊN MẬT KHẨU
                </div>
                <div class="boxnoiDung row">
                    <form action="index.php?act=quenmk" method="post">
                        <div class="row margin-bottom10">
                            Email: <br>
                            <input type="text" name="email" id="">
                        </div>
                        
                        <div class="row margin-bottom10">
                            <input type="reset" value="Nhập lại">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="submit" value="Kiểm tra" name="kiemtra">
                        </div>
                        <div class="row margin-bottom10">
                            <input type="submit" value="Trở về trang chủ" name="trove">
                        </div>
                    </form>
                    <h6>
                        <?php
                            if(isset($thongbao) && $thongbao != ''){
                                echo $thongbao;
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

