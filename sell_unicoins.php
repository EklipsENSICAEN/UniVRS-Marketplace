<?php
session_start();
include "./connexion.php";
$amount = $_GET['amount'];

$sql = "UPDATE player set pla_pme = pla_pme - '" . $_GET['amount'] ."' where pla_email='" . $_SESSION['mail'] ."'";


if ($connexion->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>