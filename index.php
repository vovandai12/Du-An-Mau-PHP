<?php
    session_start();
    include 'pdo.php';
    include 'model/danhMuc.php';
    include 'model/sanPham.php';
    include 'model/taikhoan.php';
    include 'model/cart.php';
    include 'model/gopy.php';
    include 'model/hoidap.php';
    include 'view/header.php';
    include 'global.php';

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

    $spnew = loadAll_sanPham_home();
    $danhmuc = loadAll_danhMuc();
    $dstop10 = loadAll_sanPham_top10();
    if(isset($_GET['act']) && ($_GET['act'] != '')){
        $act = $_GET['act'];
        switch ($act){
            case 'gioiThieu':{
                include 'view/gioiThieu.php';
                break;
            }

            case 'lienHe':{
                include 'view/lienHe.php';
                break;
            }

            case 'gopy':{
                if(isset($_POST['gui']) && $_POST['gui']){
                    $tenkh = $_POST['tenkh'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $gopy = $_POST['gopy'];
                    
                    $ngaygopy = date('h:i:sa d/m/Y');
                    insert_gopy($tenkh,$diachi,$sdt,$gopy,$ngaygopy);
                    $thongBao = 'Góp ý của bạn đã gửi đến admin';
                }
                
                include 'view/gopy.php';
                break;
            }

            case 'gopY':{
                include 'view/gopY.php';
                break;
            }

            case 'hoidap':{
                if(isset($_POST['gui']) && $_POST['gui']){
                    $tenkh = $_POST['tenkh'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $hoidap = $_POST['hoidap'];
                    
                    $ngayhoi = date('h:i:sa d/m/Y');
                    insert_hoidap($tenkh,$diachi,$sdt,$hoidap,$ngayhoi);
                    $thongBao = 'Hỏi đáp của bạn đã gửi đến admin';
                }
                
                include 'view/hoidap.php';
                break;
            }

            case 'hoiDap':{
                include 'view/hoiDap.php';
                break;
            }

            case 'bill':{
                include 'view/thongtindathang.php';
                break;
            }

            case 'billcomfrim':{
                if(isset($_POST['dathang']) && $_POST['dathang']){
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $pttt = $_POST['pttt'];
                    $ngaydathang = date('h:i:sa d/m/Y');
                    $tongdonhang = tongdonhang();

                    $idbill = insert_bill($name,$address,$email,$phone,$ngaydathang,$pttt,$tongdonhang);

                    //insert into cart : $_SESSION['mycart] & idbill
                    foreach ($_SESSION['mycart'] as $cart){
                        insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    }
                }
                $listbill = loadOne_bill($idbill);
                $listcart = loadOne_cart($idbill);
                $_SESSION['mycart'] = [];
                include 'view/billcomfirm.php';
                break;
            }


            case 'addtocart':{
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id = $_POST['id'];
                    $ten = $_POST['ten'];  
                    $hinh = $_POST['hinh'];  
                    $gia = $_POST['gia']; 
                    $soluong = 1;
                    $thanhtien = $soluong * $gia;
                    $spadd = [$id, $ten, $hinh, $gia, $soluong, $thanhtien];
                    array_push($_SESSION['mycart'], $spadd);              
                }
                include 'view/giohang.php';
                break;
            }

            case 'delcart':{
                if(isset($_GET['idcart'])){
                    array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart'] = [];
                }
                header('Location: index.php?act=viewcart');
                // include 'view/giohang.php';
                break;
            }

            case 'viewcart':{
                include 'view/giohang.php';
                break;
            }

            case 'spchitiet':{
                if(isset($_GET['idsp']) && $_GET['idsp']>0){
                    $id = $_GET['idsp'];
                    $onesp = loadOne_sanPham($id);
                    extract($onesp);
                    $spcungloai = load_sanPham_cungLoai($id, $iddanhmuc);
                    include 'view/boxleft.php';
                }else{
                    include 'view/home.php';
                }
                
                break;
            }

            case 'sanpham':{
                if(isset($_POST['search']) && $_POST['search'] != ''){
                    $kyw = $_POST['search'];
                }else{
                    $kyw = '';
                }
                if(isset($_GET['id']) && $_GET['id']>0){
                    $iddm = $_GET['id'];
                    
                }else{
                    $iddm = 0;
                }
                $dssp = loadAll_sanPham($kyw,$iddm);
                $tendm = loadten_danhmuc($iddm);
                include 'view/sanpham_danhmuc.php';
                
                break;
            }

            case 'dangky':{
                if(isset($_POST['submit'])){
                    if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['email'])){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        insert_taikhoan($user ,$pass, $email);
                        $thongbao1 = 'Đã đăng ký thành công...!';
                    }else{
                        $thongbao1 = 'Đăng ký thất bại...!';
                    }
                }
                include 'view/taikhoan/dangky.php';
                break;
            }

            case 'dangnhap':{
                if(isset($_POST['dangnhap'])){
                    if(isset($_POST['user']) && isset($_POST['pass'])){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $check = insert_dangnhap($user ,$pass);
                        if(is_array($check)){
                            $_SESSION['user'] = $check;
                            header('Location: index.php');
                        }else{
                            header('Location: index.php');
                        }
                    }
                }
                include 'view/taikhoan/dangky.php';
                break;
            }

            case 'capnhat':{
                if(isset($_POST['capnhat'])){
                    if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone'])){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                        $id = $_POST['id'];
                        update_taikhoan($id, $user ,$pass, $email, $phone, $address);
                        // header('Location: view/taikhoan.capnhat.php');
                    }
                    $thongbao1 = 'Cập nhật thành công...!';
                }
                include 'view/taikhoan/capnhat.php';
                break;
            }

            case 'quenmk':{
                if(isset($_POST['kiemtra'])){
                    if(isset($_POST['email'])){
                        $email = $_POST['email'];
                        $check_email = check_email($email);
                        if(is_array($check_email)){
                            $thongbao = "Mật khẩu bạn là: ".$check_email['pass'];
                        }else{
                            $thongbao = "email này không tồn tại.";
                        }
                    }
                }
                include 'view/taikhoan/quenmatkhau.php';
                break;
            }

            case 'thoat':{
                session_unset();
                include 'view/home.php';
                break;
            }

            default:{
                include 'view/home.php';
                break;
            }
        }
    }else{
        include 'view/home.php';
    }
    
    include 'view/footer.php';
?>