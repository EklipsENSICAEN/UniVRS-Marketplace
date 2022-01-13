<?php include('sellpage_request.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
?>
<head>
    <title>UniVRs - Market Place</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
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
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="marketdashboard.php" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-shopping-cart"></i>
                    </div>
                    <span class="b-title">UniVRs Marketplace</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                        <?php 
                        
                            echo $_GET['user'];
        
                        ?>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="marketdashboard.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="buypage.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-corner-down-left"></i></span><span class="pcoded-mtext">Buy items</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="sellpage.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-corner-down-right"></i></span><span class="pcoded-mtext">Sell items</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="marketdashboard.php" class="b-brand">
               <div class="b-bg">
                   <i class="feather icon-trending-up"></i>
               </div>
               <span class="b-title">Datta Able</span>
             </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>     
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><h4> <?php echo $result['pla_pme']; ?> ₿ </h4></li>
                <li><a href="buyunicoins.html" class="nav-link "><button type="button" class="btn btn-primary">Buy UniCoins</button></a></li>
                <li><a href="sellunicoins.html" class="nav-link "><button type="button" class="btn btn-primary">Sell UniCoins</button></a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                        <p><strong><?php 
                            echo $_SESSION['mail'];
                        ?></strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New item sell !</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?php 
                            echo $_SESSION['mail'];
                        ?></span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-xl-12 col-md-12 m-b-30">
                                    <h3>Last Sales</h3>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#sale" role="tab" aria-controls="sale" aria-selected="true">Sale items</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#inventory" role="tab" aria-controls="inventory" aria-selected="false">Inventory</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <form>
                                                    <?php
                                                        foreach($skinsSale as $skin) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <h6 class="m-0"><img class="m-r-10" style="width:40px;" src="<?php echo $skin["ski_path"] ?>" alt="activity-user"><?php echo $skin["ski_name"] ?> </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0"><?php echo $skin["ski_description"] ?> </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0"><?php echo $skin["ski_price"] ?>₿</h6>
                                                                </td>
                                                                <td class="text-right">
                                                                <button onclick="removeItBtnHandle()" type="button" class="btn btn-success">Remove It !</button>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                    </form>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="tab-pane fade" id="inventory" role="tabpanel" aria-labelledby="inventory-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Description</th>
                                                        <th>Average price on market</th>
                                                        <th class="text-right"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                        foreach($skinsInventory as $skin) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <h6 class="m-0"><img class="m-r-10" style="width:40px;" src="<?php echo $skin["ski_path"] ?>" alt="activity-user"><?php echo $skin["ski_name"] ?> </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0"><?php echo $skin["ski_description"] ?> </h6>
                                                                </td>
                                                                <td>
                                                                    <h6 class="m-0"><?php echo $skin["ski_price"] ?>₿</h6>
                                                                </td>
                                                                <td class="text-right">
                                                                    <?php if( $skin["ski_sell"] == false) { ?>
                                                                        <button type="button" class="btn btn-success"> Sale It !</button>
                                                                    <?php } ?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        function removeItBtnHandle() {
            console.log("hiii")
            var nom = 'removeItem.php';
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
            }
            req.open("UPDATE", nom, true);
            req.overrideMimeType("text/plain");
            req.send(null);     
        }
    </script>
</body>
</html>



<?php
    echo "<script>console.log('merde' );</script>";
?>
