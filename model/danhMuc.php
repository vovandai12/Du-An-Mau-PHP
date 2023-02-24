<?php
function insert_danhMuc($tenloai){
    $sql = "INSERT INTO `danhmucsanpham`(`tenDanhMuc`) VALUES ('$tenloai')";
    pdo_execute($sql);
}

function delete_danhMuc($id){
    $sql = "DELETE FROM `danhmucsanpham` WHERE id=".$id;
    pdo_execute($sql);
}

function loadAll_danhMuc(){
    $sql = "SELECT * FROM `danhmucsanpham` ORDER BY `tenDanhMuc`";
    $listDanhMuc = pdo_query($sql);
    return $listDanhMuc;
}

function loadOne_danhMuc($id){
    $sql = "SELECT * FROM `danhmucsanpham` WHERE id=".$id;
    $danhMuc = pdo_query_one($sql);
    return $danhMuc;
}

function update_danhMuc($tenloai, $id){
    $sql = "UPDATE `danhmucsanpham` SET `tenDanhMuc`='$tenloai' WHERE id=".$id;
    pdo_execute($sql);
}






?>