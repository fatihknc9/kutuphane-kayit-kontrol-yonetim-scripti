<?php 
require "baglan.php";


if($_POST){
    $username = $_POST['name'];
    $password = $_POST['pass'];

    $new_username = md5($username);
    $new_password = md5($password);

    $kaydet = $connect->prepare("INSERT INTO kayit (kullanici_adi, kullanici_password) VALUE (?, ?)");
    $kaydet->bindParam(1, $new_username);
    $kaydet->bindParam(2, $new_password);
    $kaydet->execute();

    session_start();
    ob_start();
    $_SESSION['oturum'] = true;


    echo "<font align='center' style='font-family: helvetica; font-size: 22px; color: green'>Başarılı bir şekilde kayıt oldunuz!</font>";

    header("Refresh: 3; url=index.php");
}




?>