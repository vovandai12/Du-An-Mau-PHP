<div class="row margin-bottom">
    <div class="boxtrai margin-right">
        <div class="row">
            <div class="row margin-bottom">
                <div class="boxtieuDe">
                    <strong>
                        <?=$tendm?>
                    </strong>
                </div>
                <div class="boxnoiDung row">
                    <?php
                        $i = 0;
                        foreach ($dssp as $sp){
                            extract($sp);
                            $hinh = $img_path.$img;
                            $linksp = 'index.php?act=spchitiet&idsp='.$id;
                            if(($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)){
                                $mr = '';
                            }else{
                                $mr = 'margin-right';
                            }
                            echo ' <div class="boxsanPham '.$mr.'">
                                        <div class="row img"><img src="'.$hinh.'" alt=""></div>
                                        <p>$'.$gia.'</p>
                                        <a href="'.$linksp.'">'.$ten.'</a>
                                    </div>';
                                    $i += 1;
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

