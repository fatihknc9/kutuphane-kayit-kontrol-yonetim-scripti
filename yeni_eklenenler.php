<?php 

include "baglan.php";
/*
$kitap_id1 = $
$new_1 = $connect->prepare("SELECT * FROM kitap_db WHERE kitap_id = ?");
$new_1->bindParam(1, $kitap_id1);
*/

$sorgu = $connect->prepare('SELECT * FROM kitap_db ORDER BY kitap_id DESC LIMIT 5');
$sorgu->execute();
$sonuc = $sorgu->fetchAll();


$cek1 = $sonuc[0][1];
$cek2 = $sonuc[1][2];
$cek3 = $sonuc[2][3];
$cek4 = $sonuc[3][4];
$cek5 = $sonuc[4][5];

?>