<?php
function insert_hoidap($tenkh,$diachi,$sdt,$hoidap,$ngayhoi){
    $sql = "INSERT INTO `hoidap`(`tenkh`, `diachi`, `sdt`, `note`, `ngayhoi`) VALUES ('$tenkh','$diachi','$sdt','$hoidap','$ngayhoi')";
    pdo_execute($sql);
}


?>