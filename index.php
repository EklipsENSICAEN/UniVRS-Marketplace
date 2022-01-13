<?php

/*header("Content-Type: application/json; charset=UTF-8");
include "./connexion.php";

$request = "SELECT * from player";

try{
    $res_player = $connexion->query($request);
} catch(PDOException $e){
    die('Erreur:'.$e->getMessage());
}
$player = $res_player->fetchAll();
//echo json_encode($player);*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UniVRs - coucou Market Place</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/logovr.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="text-center">
        <br><br>
        <img src="./logo.png" class="rounded mx-auto d-block" alt="image" width="200">
        <br><br>
        <h3> Welcome to UniVRs <br> Marketplace </h3>
        <br><br><br>
            <div class="input-group text-center col-3" style="margin:auto; margin-bottom:2%;">
                <input id="mail" name="mail" type="text" class="form-control " placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
            </div>
            <!--button onclick="redirectindex()" class="btn btn-primary" type="submit">Connect</button-->
            <button onclick="redirectindex()" class="btn btn-primary" type="submit">Connect</button>

    </div>
</div>




<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script>
function redirectindex() {
    
    var mail = document.getElementById("mail").value;
    var nom = 'login.php?mail='+mail;
    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        store_user(req);
        window.location.replace("marketdashboard.php");
    }
    req.open("GET", nom, true);
    req.overrideMimeType("text/plain");
    req.send(null);     
    
}

function store_user(req){
    console.log(req.responseText);
}

    
    
</script>
</body>
</html>
