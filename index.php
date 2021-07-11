<?php
require('settings/initial.php');
require('include/copyright.php');
//---- Page Settings ----//
$pageid = 1;
$slink = FALSE;
//-----------------------//
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Overview</title>
    <?php require('include/header.php');?>

</head>

<body class="g-sidenav-show bg-dark">
    <?php require('include/sidenav.php');?>

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <?php require('include/topbar.php');?>

        <div class="container-fluid py-4">
            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card shadow-none bg-gradient-secondary rounded rounded-2" id="sidenavCard">
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-primary">Remaining Balance</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">$12.07</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success rounded rounded-1 mb-n3"><i class="fas fa-money-bill ml-1 mr-2"></i> Cash In</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card shadow-none bg-gradient-secondary rounded rounded-2" id="sidenavCard">
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-primary">Current Plan</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">Premium</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-book ml-1 mr-2"></i> Check Plans</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card shadow-none bg-gradient-secondary rounded rounded-2" id="sidenavCard">
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-primary">Server Slot Left</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">2 Slots</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-server ml-1 mr-2"></i> Server List</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card shadow-none bg-gradient-secondary rounded rounded-2" id="sidenavCard">
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-primary">MiniCoins</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">324</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-coins ml-1 mr-2"></i> Earn</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 py-3">
                <div class="col-xl-6 col-md-12 col-sm-12 mb-4">
                    <?php require('include/announcements.php');?>
                </div>
            </div>
            <?php require('include/advertisement.php');?>
            <?php require('include/footer.php');?>
        </div>
        <?php require('include/scripts.php');?>
        <script>
            Swal.fire({title:'<span class="text-gradient text-primary">Action Success!</span>',html:'<span class="text-info">Server successfully created!</span>',icon:"success",background:"#191954",timer:1e4,timerProgressBar:!0});
        </script>
