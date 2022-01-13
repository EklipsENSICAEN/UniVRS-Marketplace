<?php
session_start();
include "./connexion.php";

$request = "SELECT pla_pme, pla_time from player where pla_email = '".$_SESSION['mail']."';" ;

 try{
    $prepare_result = $connexion->prepare($request);
    $prepare_result->execute();

    $result = $prepare_result->fetch();
} catch(PDOException $e){
    die('Erreur:'.$e->getMessage());
}

?>