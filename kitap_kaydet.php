<?php 

require "baglan.php";


if(isset($_POST['kitap_ekle']))
{
    $kitap_ismi = $_POST['kitap_ismi'];
    $yazar_ismi = $_POST['yazar_ismi'];
    $cilt_durumu = $_POST['cilt_durumu'];
    $sayfa_sayisi = $_POST['sayfa_sayisi'];
    $kitap_turu = $_POST['kitap_turu'];

    $ekle = $connect->prepare("INSERT INTO kitap_db (kitap_ismi, yazar_ismi, cilt_durumu, sayfa_sayisi, kitap_turu) VALUES (?, ?, ?, ?, ?)");
    $ekle->execute(array($kitap_ismi, $yazar_ismi, $cilt_durumu, $sayfa_sayisi, $kitap_turu));
    

    echo "<font align='center' style='font-family: helvetica; font-size: 22px; color: green'>Kitap başarıyla eklendi!</font>";
    header("Refresh: 3; url=guncelle.php");
}


?>