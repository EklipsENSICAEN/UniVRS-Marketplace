<?php
session_start();
include "./connexion.php";

$sql = "UPDATE skin set ski_sell = false where ski_id='" . $_GET['id'] ."';";

if ($connexion->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>