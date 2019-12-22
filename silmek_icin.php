<?php 
require "baglan.php";

if($_POST['kitap_sil'])
{
    $kitap_ismi = $_POST['silinecek_kitap_ismi'];

    $islem = $connect->exec("DELETE FROM kitap_db WHERE kitap_ismi LIKE '%$kitap_ismi%'");

    echo "<font align='center' style='font-family: helvetica; font-size: 22px; color: green'>Başarıyla istelilen kitap kayittan silindi!</font>";
    header("Refresh: 3; url=guncelle.php");

}

?>