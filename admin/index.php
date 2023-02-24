<?php
    include '../pdo.php';
    include '../model/danhMuc.php';
    include '../model/sanPham.php';
    include '../model/taikhoan.php';
    include '../model/binhluan.php';
    include 'header.php';

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            //Phần code của danh mục
            case 'adddm':{
                //kiểm tra người dùng có kích vào nút add
                if(isset($_POST['themMoi']) && ($_POST['themMoi'])){
                    $tenloai = $_POST['tenLoai'];
                    insert_danhMuc($tenloai);
                    $thongBao = 'Thêm thành công...!';
                }
                include 'danhmuc/add.php';
                break;
            }
            case 'listdm':{
                $listDanhMuc = loadAll_danhMuc();
                include 'danhmuc/list.php';
                break;
            }

            case 'xoaDanhMuc':{
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $id = $_GET['id'];
                    delete_danhMuc($id);
                }        
                $listDanhMuc = loadAll_danhMuc();
                include 'danhmuc/list.php';
                break;
            }
            case 'suaDanhMuc':{
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $danhMuc = loadOne_danhMuc($_GET['id']);
                }
                
                include 'danhmuc/update.php';
                break;
            }

            case 'updateDanhMuc':{
                //kiểm tra người dùng có kích vào nút cập nhập
                if(isset($_POST['capNhat']) && ($_POST['capNhat'])){
                    $tenloai = $_POST['tenLoai'];
                    $id = $_POST['id'];
                    update_danhMuc($tenloai, $id);
                    $thongBao = 'Cập nhật thành công...!';
                }
                $listDanhMuc = loadAll_danhMuc();
                include 'danhmuc/list.php';
                break;
            }

            //Phần code của sản phẩm
            case 'addsp':{
                //kiểm tra người dùng có kích vào nút add
                if(isset($_POST['themMoi']) && ($_POST['themMoi'])){
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $moTasp = $_POST['moTasp'];
                    $fileName = $_FILES['hinhsp']['name'];
                    //upload file lên php
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
                    //kiểm tra nếu upload file được sẽ thông báo
                    if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                      //  echo "The file ". htmlspecialchars( basename( $_FILES["hinhsp"]["name"])). " has been uploaded.";
                    } else {
                       // echo "Sorry, there was an error uploading your file.";
                    }
                   

                    insert_sanPham($tensp ,$giasp, $moTasp, $fileName, $iddm);
                    $thongBao = 'Thêm thành công...!';
                }
                $listDanhMuc = loadAll_danhMuc();
                include 'sanpham/add.php';
                break;
            }
            case 'listsp':{
                if(isset($_POST['submit']) && ($_POST['submit'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }

                $listDanhMuc = loadAll_danhMuc();
                $listsanPham = loadAll_sanPham($kyw, $iddm);
                include 'sanpham/list.php';
                break;
            }

            case 'xoasanPham':{
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    delete_sanPham($_GET['id']);
                }        
                $listsanPham = loadAll_sanPham('', 0);
                include 'sanpham/list.php';
                break;
            }
            case 'suasanPham':{
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $sanPham = loadOne_sanPham($_GET['id']);
                }
                $listDanhMuc = loadAll_danhMuc();
                include 'sanpham/update.php';
                break;
            }

            case 'updatesp':{
                //kiểm tra người dùng có kích vào nút cập nhập
                if(isset($_POST['capNhat']) && ($_POST['capNhat'])){
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $moTasp = $_POST['moTasp'];
                    $fileName = $_FILES['hinhsp']['name'];
                    //upload file lên php
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
                    //kiểm tra nếu upload file được sẽ thông báo
                    if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                      //  echo "The file ". htmlspecialchars( basename( $_FILES["hinhsp"]["name"])). " has been uploaded.";
                    } else {
                       // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanPham($id, $tensp ,$giasp, $moTasp, $fileName, $iddm);
                    $thongBao = 'Cập nhật thành công...!';
                }
                $listsanPham = loadAll_sanPham('', 0);
                include 'sanpham/list.php';
                break;
            }

            case 'dskh':{
                $listtaikhoan = loadAll_taikhoan();
                include 'taikhoan/list.php';
                break;
            }

            case 'capnhat':{
                if(isset($_POST['submit'])){
                    if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['phone'])){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                        
                        update_taikhoan($id, $user ,$pass, $email, $phone, $address);
                    }
                    $check = loadOne_taikhoan($_GET['id']);
                }
                include 'taikhoan/suataikhoan.php';
                break;
            }

            case 'dsbl':{
                $list_binhluan = loadAll_binhluan(0);
                include 'binhluan/list_binhluan.php';
                break;
            }

            case 'xoabl':{
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    delete_binhluan($_GET['id']);
                }        
                $list_binhluan = loadAll_bl();
                include 'binhluan/list_binhluan.php';
                break;
            }

            default:{
                include 'home.php';
                break;
            }
        }
    }else{
        include 'home.php';
    }
    
    include 'footer.php';
?>