<?php
    function insert_taikhoan($user ,$pass, $email){
        $sql = "INSERT INTO `taikhoan`(`user`, `pass`, `email`) VALUES ('$user','$pass','$email')";
        pdo_execute($sql);
    }

    function insert_dangnhap($user ,$pass){
        $sql = "SELECT * FROM `taikhoan` WHERE user='".$user."' AND pass='".$pass."'";
        $dn = pdo_query_one($sql);
        return $dn;
    }

    function update_taikhoan($id, $user ,$pass, $email, $phone, $address){
        $sql = "UPDATE `taikhoan` SET `user`='".$user."',`pass`='".$pass."',`email`='".$email."',`address`='".$address."',`phone`='".$phone."' WHERE id=".$id;
        pdo_execute($sql);
    }

    function check_email($email){
        $sql = "SELECT * FROM `taikhoan` WHERE email='".$email."'";
        $dn = pdo_query_one($sql);
        return $dn;
    }

    function loadAll_taikhoan(){
        $sql = "SELECT * FROM `taikhoan` ORDER BY id DESC";
        $listtaikhoan = pdo_query($sql);
        return $listtaikhoan;
    }

    function loadOne_taikhoan($id){
        $sql = "SELECT * FROM `taikhoan` WHERE id=".$id;
        $taikhoan = pdo_query_one($sql);
        return $taikhoan;
    }
?>