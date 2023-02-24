<?php
function insert_sanPham($tensp ,$giasp, $moTasp, $fileName, $iddm){
    $sql = "INSERT INTO `sanpham`(`ten`, `gia`, `img`, `mota`,`iddanhmuc`) VALUES ('$tensp','$giasp','$fileName','$moTasp','$iddm')";
    pdo_execute($sql);
}

function delete_sanPham($id){
    $sql = "DELETE FROM `sanpham` WHERE id=".$id."";
    pdo_execute($sql);
}

function loadAll_sanPham($kyw,$iddm){
    $sql = "SELECT * FROM `sanpham` WHERE 1";
    if($kyw != ''){
        $sql .=" AND `tenDanhMuc` LIKE '%".$kyw."%'";
    }

    if($iddm > 0){
        $sql .=" AND `iddanhmuc`=".$iddm."";
    }
    $sql .= " ORDER BY id DESC";
    $listsanPham = pdo_query($sql);
    return $listsanPham;
}

function loadOne_sanPham($id){
    $sql = "SELECT * FROM `sanpham` WHERE id=".$id;
    $sanPham = pdo_query_one($sql);
    return $sanPham;
}

function loadten_danhmuc($iddm){
    if($iddm > 0){
        $sql = "SELECT * FROM `danhmucsanpham` WHERE id=".$iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tenDanhMuc;
    }else{
        return "";
    }
}

function update_sanPham($id, $tensp ,$giasp, $moTasp, $fileName, $iddm){
    if($fileName != ''){
        $sql = "UPDATE `sanpham` SET `id`='$iddm',`ten`='$tensp',`gia`='$giasp',`img`='$fileName',`mota`='$moTasp' WHERE id=".$id;
    }else{
        $sql = "UPDATE `sanpham` SET `id`='$iddm',`ten`='$tensp',`gia`='$giasp',`mota`='$moTasp' WHERE id=".$id;
    }
    pdo_execute($sql);
}

function loadAll_sanPham_home(){
    $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY 'id' DESC LIMIT 0,9";
    $listsanPham = pdo_query($sql);
    return $listsanPham;
}

function loadAll_sanPham_top10(){
    $sql = "SELECT * FROM `sanpham` WHERE 1 ORDER BY 'luotxem' DESC LIMIT 0,10";
    $listsanPham = pdo_query($sql);
    return $listsanPham;
}

function load_sanPham_cungLoai($id, $iddanhmuc){
    $sql = "SELECT * FROM `sanpham` WHERE `iddanhmuc`='$iddanhmuc' AND `id`<>".$id;
    $sanPham = pdo_query($sql);
    return $sanPham;
}

?>