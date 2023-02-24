<div class="row margin-bottom">
    <div class="boxtrai margin-right">
        <div class="row">
            <div class="showanh">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/banner3.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="images/banner4.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="images/banner5.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                $linksp = 'index.php?act=spchitiet&idsp=' . $id;
                if (($i == 2) || ($i == 5) || ($i == 8) ||($i == 11)) {
                    $mr = '';
                } else {
                    $mr = 'margin-right';
                }
                echo ' <div class="boxsanPham ' . $mr . '">
                                <div class="row img"><img src="' . $hinh . '" alt=""></div>
                                <p>$' . $gia . '</p>
                                <a href="' . $linksp . '">' . $ten . '</a>
                                <div class="row">
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="'.$id.'">
                                    <input type="hidden" name="ten" value="'.$ten.'">
                                    <input type="hidden" name="hinh" value="'.$hinh.'">
                                    <input type="hidden" name="gia" value="'.$gia.'">
                                    <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </form>
                                </div>
                        </div>';
                $i += 1;
            }
            ?>
            <!--
            <div class="boxsanPham margin-right">
                <div class="row img"><img src="images/1.jpg" alt=""></div>
                <p>30$</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsanPham">
                <div class="row img"><img src="images/1.jpg" alt=""></div>
                <p>30$</p>
                <a href="#">Đồng hồ</a>
            </div>
        </div>
        <div class="row">
            <div class="boxsanPham margin-right">
                <div class="row img"><img src="images/1.jpg" alt=""></div>
                <p>30$</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsanPham margin-right">
                <div class="row img"><img src="images/1.jpg" alt=""></div>
                <p>30$</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsanPham">
                <div class="row img"><img src="images/1.jpg" alt=""></div>
                <p>30$</p>
                <a href="#">Đồng hồ</a>
            </div>
        </div>
        <div class="row">
            <div class="boxsanPham margin-right">
                <div class="row img"><img src="images/1.jpg" alt=""></div>
                <p>30$</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsanPham margin-right">
                <div class="row img"><img src="images/1.jpg" alt=""></div>
                <p>30$</p>
                <a href="#">Đồng hồ</a>
            </div>
            <div class="boxsanPham">
                <div class="row img"><img src="images/1.jpg" alt=""></div>
                <p>30$</p>
                <a href="#">Đồng hồ</a>
            </div>-->
        </div>
    </div>
    <div class="boxphai">
        <?php
        include 'boxright.php';
        ?>
    </div>
</div>