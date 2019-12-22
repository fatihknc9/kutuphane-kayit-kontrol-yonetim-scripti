<?php 
session_start();
ob_start();
if(!empty($_SESSION['oturum'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kütüphane Kayıt&Yönetim Scripti</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style/kitaplar-style.css">
    <link rel="stylesheet" href="style/footer-style.css">

</head>
<body>
    <?php require "eklenenler.php"; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <header id="header">Kütüphane kayit&yönetim scripti</header>
    <div class="menu" align="center">
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="kitaplar.php">Kitaplar</a></li>
            <li><a href="guncelle.php">Güncelle</a></li>
            <li><a href="hakkimda.php">Hakkımda</a></li>
            <li><a href="giris.php">Giriş</a>&nbsp;&nbsp;<a href="cikis.php">Çıkış</a></li>
        </ul>
    </div>

    <div class="container" id="listele">
        <table cellpadding="5" cellspacing="5">
        <label class="label">BAZI EKLENEN KİTAPLAR LİSTESİ</label>
        <form action="eklenenler.php" method="post">
            <table class="table table-striped table-bordered table-hover table-sm table-light tablo-responsive">
                <tr>
                    <td>Kitap ismi</td>
                    <td>Yazar ismi</td>
                    <td>Cilt durumu</td>
                    <td>Sayfa sayısı</td>
                    <td>Kitap türü</td>
                </tr>
                <?php 
                
                    foreach ($sonuc as $x)
                    {
                        ?>
                        <tr>
                            <td><?php echo $x['kitap_ismi']; ?></td>
                            <td><?php echo $x['yazar_ismi']; ?></td>
                            <td><?php echo $x['cilt_durumu']; ?></td>
                            <td><?php echo $x['sayfa_sayisi']; ?></td>
                            <td><?php echo $x['kitap_turu']; ?></td>
                        </tr>
                        <?php
                    }
                ?>
                
            </table>
            
        
            
        </form>
        <br><br><br><br><br><br><br>

        </table>

    </div>
    

<?php require "footer.html"; }
else{
require "uyari.html";
}?>
