<?php 
ob_start();
session_start();
?>
<?php if(!empty($_SESSION['oturum'])){?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style/guncelle-style.css">
    <link rel="stylesheet" href="style/header-style.css">
    <link rel="stylesheet" href="style/footer-style.css">
    <title>Kütüphane kayit sistemi</title>
  </head>
  <body>
  

  <div class="dropdown" id="div1">
    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
      MENU
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item active" href="index.php">Anasayfa</a>
      <a class="dropdown-item active" href="kitaplar.php">Kitaplar</a>
      <a class="dropdown-item active" href="guncelle.php">Güncelle</a>
      <a class="dropdown-item active" href="hakkimda.php">Hakkımda</a>
      <a class="dropdown-item active" href="giris.php">Giriş</a><a class="dropdown-item active" href="cikis.php">Çıkış</a></li>
    </div>
  </div>
  <header style="font-size: 33px; color: rgb(50, 106, 151); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" align="center"><font>Kütüphane Kayıt&Yönetim Scripti</font></header>
  <br><br><br>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <div class="container" id="div-1">
    
        <label class="label">KİTAP EKLEMEK İÇİN</label>
        <form action="kitap_kaydet.php" method="post">
            <table class="table table-striped table-bordered table-hover table-sm table-light tablo-responsive">
                <tr>
                    <td>Kitap ismi</td>
                    <td>Yazar ismi</td>
                    <td>Cilt durumu</td>
                    <td>Sayfa sayısı</td>
                    <td>Kitap türü</td>
                </tr>
                <tr>
                    <td><input name="kitap_ismi" type="text" required="required" maxlength="40" placeholder="Kitap ismi"></td>
                    <td><input name="yazar_ismi" type="text" required="required" maxlength="40" placeholder="Yazar ismi"></td>
                    <td><input name="cilt_durumu" type="text" required="required" maxlength="40" placeholder="Cilt durumu "></td>
                    <td><input name="sayfa_sayisi" type="text" required="required" maxlength="40" placeholder="Sayfa sayısı"></td>
                    <td><input name="kitap_turu" type="text" required="required" maxlength="40" placeholder="Kitap türü"></td>                </tr>
            </table>
            <td><input id="input" name="kitap_ekle" type="submit" class="btn btn-primary"></td>
            <td><input id="input1" type="reset" class="btn btn-dark"></td>
        </form>
        <br><br><br><br><br><br><br>
        <label class="label">KİTAP SİLMEK İÇİN</label>        
        <form action="silmek_icin.php" method="post" class="form1">
            <table class="table table-striped table-bordered table-hover table-sm table-light tablo-responsive">
                    <tr>
                        <td>Silinecek kitap ismi<td><input name="silinecek_kitap_ismi" type="text" maxlength="40" placeholder="Kitap ismini giriniz"></td></td>
                    </tr>
                    <tr>
                      <td><input id="input2" name="kitap_sil" required="required" type="submit" class="btn btn-primary"></td>
                      <td><input id="input3" type="reset" class="btn btn-dark"></td>
                    </tr>
            </table>
        </form>
    </div>

    <div id="footer" style="margin-left: 42.5%;">
    <footer>
        <font>&copy; Tüm sorumluluklar kullanıcıya aittir.</font>
    </footer>
    </div>
</body>
</html>
<?php }else{ require "uyari.html";} ?>
