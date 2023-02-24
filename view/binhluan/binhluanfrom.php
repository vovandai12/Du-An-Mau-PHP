<?php
    session_start();
    include '../../model/binhluan.php';
    include '../../pdo.php';
    $idpro = $_REQUEST['idpro'];
    $dsbl = loadAll_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="row margin-bottom">
        <div class="boxtieuDe">
            BÌNH LUẬN
        </div>
        <div class="boxnoiDung2 binhluan">
            <table>
            <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>'.$noidung.'</td>';
                    echo '<td>'.$iduser.'</td>';
                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                }
                ?>
            </table>
        </div>
        <div class="boxtimKiem search-box">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung" id="">
                <input type="submit" name="send" value="Gửi bình luận">
            </form>
        </div>

        <?php
        if (isset($_POST['send']) && ($_POST['send'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>
</html>