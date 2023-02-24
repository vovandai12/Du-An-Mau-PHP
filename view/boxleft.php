<div class="row margin-bottom">
    <div class="boxtrai margin-right">
        <div class="row">
            <div class="row margin-bottom">
                <?php
                extract($onesp);
                ?>
                <div class="boxtieuDe">
                    <?= $ten ?>
                </div>
                <div class="boxnoiDung row">
                    <?php
                    $img = $img_path . $img;
                    echo '<div class="row margin-bottom spct"><img src="' . $img . '" alt=""></div>';
                    echo $mota;
                    ?>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluanfrom.php", {
                        idpro: <?=$id?>
                    });
                });
            </script>
            <div class="row" id="binhluan">

                </div>
            </div>
            <!-- <div class="row">
                <iframe src="view/binhluan/binhluanfrom.php?idpro=" <?= $id ?> frameborder="0" width="100%" height="300px"></iframe>
            </div> -->
            <div class="row margin-bottom">
                <div class="boxtieuDe">
                    SẢN PHẨM CÙNG LOẠI
                </div>
                <div class="boxnoiDung row">
                    <?php
                    foreach ($spcungloai as $spcl) {
                        $linksp = 'index.php?act=spchitiet&idsp=' . $id;
                        extract($spcl);
                        echo '<li><a href="' . $linksp . '">' . $ten . '</a></li>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include 'boxright.php';
        ?>
    </div>
</div>
