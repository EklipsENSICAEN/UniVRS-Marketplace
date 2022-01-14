<?php
session_start();
include "./connexion.php";


$sql1 = "update skin set ski_sell = false where ski_id=" . $_GET['id'] .";";
$connexion->query($sql1); 

$sqlSelect1 = "select pla_pme from player join skin using (pla_email) where ski_id=" . $_GET['id'] ."";
$sqlSelect1R = $connexion->prepare($sqlSelect1);
$sqlSelect1R->execute();
$pme = $sqlSelect1R->fetchAll();

$sqlSelect11 = "select ski_price from skin where ski_id=" . $_GET['id'] ."";
$sqlSelect2R = $connexion->prepare($sqlSelect11);
$sqlSelect2R->execute();
$price = $sqlSelect2R->fetchAll();

$new_pme = $pme[0]['pla_pme'] +  $price[0]['ski_price'];

$id = $_GET['id'];
$sql2 = "update player natural join skin set pla_pme = $new_pme where ski_id = $id; ";

$sql3 = "update skin set pla_email = '" . $_SESSION['mail'] ."' where ski_id = '" . $_GET['id'] ."';";
$connexion->exec($sql3); 

$sqlSelect2 = "select pla_pme from player join skin using (pla_email) where ski_id=" . $_GET['id'] ."";
$sqlSelect3R = $connexion->prepare($sqlSelect2);
$sqlSelect3R->execute();
$pme2 = $sqlSelect3R->fetchAll();

$new_pme2 = $pme2[0]['pla_pme'] -  $price[0]['ski_price'];

$sql4 = "update player natural join skin set pla_pme = " . $new_pme2 . " where ski_id = " . $_GET['id'] .";";
$connexion->exec($sql4);
?>