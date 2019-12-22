<?php require "baglan.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kütüphane kayıt sistemi</title>
    <link href="style/index-style.css" rel="stylesheet">
    <link href="style/header-style.css" rel="stylesheet">
    <link href="style/footer-style.css" rel="stylesheet">
</head>
<body>
    
    <?php require "header.php"; ?>
    <?php require "yeni_eklenenler.php"; ?>
    <br><br>
    <div id="bilgilendirme">
        <label id="eklenenler">En son eklenen kitaplar</label>
    </div>
    <div id="son-eklenenler">
        
        <table>
                
            <tr>
                Son eklenen 1 - <label id="label1"><?php echo $cek1; ?></label>
                <br><br>
                Son eklenen 2 - <label id="label2"><?php echo $cek2; ?></label>
                <br><br>
                Son eklenen 3 - <label id="label3"><?php echo $cek3; ?></label>
                <br><br>
                Son eklenen 4 - <label id="label4"><?php echo $cek4; ?></label>
                <br><br>
                Son eklenen 5 - <label id="label5"><?php echo $cek5; ?></label>
            </tr>
                
        </table>
        
    </div>
    
<?php require "footer.html"; ?>