<?php
session_start();
include "./connexion.php";

$request = "SELECT ski_id, ski_name, ski_price, ski_path, ski_sell, ski_description, pla_pseudo from skin join player using (pla_email) where ski_sell is true and pla_email = '" . $_SESSION['mail'] ."';" ;

 try{
    $prepare_result = $connexion->prepare($request);
    $prepare_result->execute();

    $skinsSale = $prepare_result->fetchAll();
} catch(PDOException $e){
    die('Erreur:'.$e->getMessage());
}

$request = "SELECT ski_id, ski_name, ski_price, ski_path, ski_sell, ski_description, pla_pseudo from skin join player using (pla_email) where pla_email = '" . $_SESSION['mail'] ."';" ;

 try{
    $prepare_result = $connexion->prepare($request);
    $prepare_result->execute();

    $skinsInventory = $prepare_result->fetchAll();
} catch(PDOException $e){
    die('Erreur:'.$e->getMessage());
}

$request = "SELECT pla_pme, pla_time from player where pla_email = '".$_SESSION['mail']."';" ;

 try{
    $prepare_result = $connexion->prepare($request);
    $prepare_result->execute();

    $result = $prepare_result->fetch();
} catch(PDOException $e){
    die('Erreur:'.$e->getMessage());
}


?>