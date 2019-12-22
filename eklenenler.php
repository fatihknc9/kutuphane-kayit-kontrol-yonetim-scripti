<?php 

include "baglan.php";


$sorgu = $connect->prepare('SELECT * FROM kitap_db');
$sorgu->execute();
$sonuc = $sorgu->fetchAll();


?>

