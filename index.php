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

    <main class="main-content mt-1 border-radius-lg">
        <?php require('include/topbar.php');?>

        <div class="container-fluid py-4">
            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-none border border-primary rounded rounded-2" id="sidenavCard">
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-primary text-gradient">Remaining Balance</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">$12.07</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success rounded rounded-1 mb-n3"><i class="fas fa-money-bill ml-1 mr-2"></i> Cash In</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-none border border-primary rounded rounded-2" id="sidenavCard">
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-primary text-gradient">Current Plan</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">Premium</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-book ml-1 mr-2"></i> Check Plans</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-none border border-primary rounded rounded-2" id="sidenavCard">
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-primary text-gradient">Server Slot Left</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">2 Slots</h5>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-server ml-1 mr-2"></i> Server List</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-none border border-primary rounded rounded-2" id="sidenavCard">
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold text-primary text-gradient">MiniCoins</p>
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
                    <div class="card bg-gradient-dark rounded rounded-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-1 pt-2 text-bold text-white">Announcements</p>
                                        <h5 class="font-weight-bolder text-white">FirePanel Dashboard</h5>
                                        <p class="mb-5 text-white">Please be adviced that <b class="bg-gradient-faded-dark rounded"><code class="m-1">GS-SGP-01</code></b>, <b class="bg-gradient-faded-dark rounded"><code class="m-1">WING-SGP-01</code></b> going for scheduled maintanance today</p>
                                        <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="">
                                            Read More at Discord Server
                                            <i class="fab fa-discord fa-lg ms-1" aria-hidden="true"></i>
                                            <i class="fas fa-arrow-right fa-lg ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12">
                    <div class="card bg-gray">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-2 text-bold text-danger"><i class="fas fa-ad"></i> Advertisements from our sponsors</p>
                                        <!--<img src="https://cdn.discordapp.com/attachments/839600786362204190/846343132584476672/Gif_leggera_sfondo.gif?size=512" alt="">-->
                                        <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-2" href="">
                                            Read more here
                                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require('include/footer.php');?>
        </div>
        <?php require('include/scripts.php');?>
        <script>
            Swal.fire({
                title: '<span class="text-gradient text-primary">Action Success!</span>',
                html: '<span class="text-info">Server successfully created!</span>',
                icon: 'success',
                background: '#0d0044',
                timer: 3000,
                timerProgressBar: true,
            })
        </script>
