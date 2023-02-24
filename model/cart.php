<?php

function viewcart(){
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($_SESSION['mycart'] as $mycart) {
        $hinh = $img_path.$mycart[2];
        $tong += $mycart[5];

        echo '<tr>
                                    <td>' . $mycart[0] . '</td>
                                    <td>' . $mycart[1] . '</td>
                                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                                    <td>' . $mycart[3] . '</td>
                                    <td>' . $mycart[4] . '</td>
                                    <td>' . $mycart[5] . '</td>
                                    <td><a href="index.php?act=delcart&idcart=' . $i . '"> <input type="button" value="Xoá"></a></td>
                                </tr>';
        $i += 1;
    }
    echo '<tr>
                    <td colspan="5">Tổng đơn hàng</td>
                    <td>' . $tong . '</td>
                    <td></td>
                </tr>';
 }

 function tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['mycart'] as $mycart) {
        $tong += $mycart[5];
    }
    return $tong;
 }

 function insert_bill($name,$address,$email,$phone,$ngaydathang,$pttt,$tongdonhang){
    $sql = "INSERT INTO `bill`(`bill_name`, `bill_address`, `bill_phone`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`) VALUES ('$name','$address','$phone','$email','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}

function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql = "INSERT INTO `cart`(`iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}

function loadOne_bill($id){
    $sql = "SELECT * FROM `bill` WHERE id=".$id;
    $listbill = pdo_query_one($sql);
    return $listbill;
}

function loadOne_cart($idbill){
    $sql = "SELECT * FROM `cart` WHERE idbill=".$idbill;
    $listcart = pdo_query($sql);
    return $listcart;
}

function show_chiTiet($listcart){
    global $img_path;
    foreach ($listcart as $mycart) {
        $hinh = $img_path.$mycart['img'];
        echo '<tr>
                                    <td>' . $mycart['id'] . '</td>
                                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                                    <td>' . $mycart['soluong'] . '</td>
                                    <td>' . $mycart['thanhtien'] . '</td>
                                </tr>';

    }
 }
?>