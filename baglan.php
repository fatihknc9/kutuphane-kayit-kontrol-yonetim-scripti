<?php 

try{
    $connect = new PDO("mysql:host=localhost;dbname=database_1", "root","");
} catch(PDOException $e){
    die($e->getMessage());
}


?>