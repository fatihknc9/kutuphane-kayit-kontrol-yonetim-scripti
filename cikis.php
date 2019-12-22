<?php 
if(!empty($_SESSION['oturum']))
{
    ob_start();
    session_start();
    session_destroy();
    ob_end_flush();
    header("Location:giris.php");
}else{
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<font style='margin-left: 45%; margin-top: 2%; font-size: 22px; font-family: cursive; color: red'>Henüz giriş yapılmamış!</font>";
    header("Refresh: 3; url= $url");
}

?>