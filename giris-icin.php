<?php 
require "baglan.php";
session_start();
ob_start();

if(isset($_POST['giris_yap']))
{
    if(!empty($_POST['name']) && !empty($_POST['pass']))
    {
        $username = $_POST['name'];
        $password = $_POST['pass'];

        $new_username = md5($username);
        $new_password = md5($password);

  
        $kontrol = $connect->prepare("SELECT * FROM kayit WHERE kullanici_adi = ?, kullanici_password = ?");
        $kontrol->execute(array($new_username, $new_password));
        
            
    
       
        if($kontrol){
            echo "<font align='center' style='font-family: helvetica; font-size: 22px; color: green'>Başarılı bir şekilde giriş yaptınız!</font>";
            
            $_SESSION['oturum'] = true;
            header("Refresh: 3; url=index.php");
        }else{
            echo "<font align='center' style='font-family: helvetica; font-size: 22px; color: red'>Kullanıcı adı veya şifre yanlış!</font>";
            header("Refresh: 3; url=giris.html");

        }
        
       
        

    }
}


?>

