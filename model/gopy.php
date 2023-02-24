<?php
function insert_gopy($tenkh,$diachi,$sdt,$gopy,$ngaygopy){
    $sql = "INSERT INTO `gopy`(`tenkh`, `diachi`, `sdt`, `note`, `ngaygopy`) VALUES ('$tenkh','$diachi','$sdt','$gopy','$ngaygopy')";
    pdo_execute($sql);
}


?>