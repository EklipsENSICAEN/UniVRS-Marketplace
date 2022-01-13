<?php
global $connexion;
try {

    $connexion = new PDO("mysql:host=localhost; port=3306; dbname=univrs", "dev", "eklips");
    
} catch (PDOException $e){
    echo $e->getMessage();
}

?>