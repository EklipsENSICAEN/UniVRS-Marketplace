<?php
session_start();
header("Content-Type: application/json; charset=UTF-8");
include "./connexion.php";

// Retrieve username and password from database according to user's input
//$login = mysqli_query("SELECT * FROM player WHERE (pla_email = '" . mysqli_real_escape_string($_GET['mail']) . "')");

// Check username and password match
//if (mysqli_num_rows($login) == 1) {
// Set username session variable
$_SESSION['mail'] = $_GET['mail'];

echo $_GET['mail'];


//}



