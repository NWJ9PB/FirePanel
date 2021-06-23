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

        <div class="container py-4">
            <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card card-background shadow-none card-background-mask-info bg-info" id="sidenavCard">
                        <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80)"></div>
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Remaining Balance</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">$12.07</h5>
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <div class="icon icon-shape icon-sm bg-gradient-danger shadow text-center border-radius-md">
                                        <i class="fas fa-book mt-n12" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-money-bill ml-1 mr-2"></i> Cash In</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card card-background shadow-none card-background-mask-info bg-info" id="sidenavCard">
                        <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1527219525722-f9767a7f2884?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=752&q=80)"></div>
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Current Plan</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">Premium</h5>
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <div class="icon icon-shape icon-sm bg-gradient-danger shadow text-center border-radius-md">
                                        <i class="fas fa-book mt-n12" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-book ml-1 mr-2"></i> Check Plans</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card card-background shadow-none card-background-mask-info bg-info" id="sidenavCard">
                        <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1484557052118-f32bd25b45b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80)"></div>
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Server Slot Left</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">2 Slots</h5>
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <div class="icon icon-shape icon-sm bg-gradient-danger shadow text-center border-radius-md">
                                        <i class="fas fa-money-bill mt-n12" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-server ml-1 mr-2"></i> Server List</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card card-background shadow-none card-background-mask-info bg-info" id="sidenavCard">
                        <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1512075135822-67cdd9dd7314?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80)"></div>
                        <div class="card-body text-left p-3 w-100">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">MiniCoins</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">324</h5>
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <div class="icon icon-shape icon-sm bg-gradient-danger shadow text-center border-radius-md">
                                        <i class="fas fa-coins mt-n12" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <a class="btn badge badge-pill bg-gradient-success mb-n3"><i class="fas fa-coins ml-1 mr-2"></i> Earn</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 py-3 align-content-center">
                <div class="col-xl-4 col-md-12 col-sm-12 mb-4">
                    <div class="card bg-info shadow-xl">
                        <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('assets/img/curved-images/curved14.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 p-3">
                                <div class="row">
                                    <i class="fas fa-wifi text-white p-2"></i>
                                    <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                                                <h6 class="text-white mb-0">Jack Peterson</h6>
                                            </div>
                                            <div>
                                                <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                                                <h6 class="text-white mb-0">11/22</h6>
                                            </div>
                                        </div>
                                        <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                            <img class="w-60 mt-2" src="assets/img/logos/mastercard.png" alt="logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12 mb-4">
                    <div class="card bg-gradient-dark">
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
                title: 'Action Success!',
                text: 'Server successfully created!',
                icon: 'success',
                //background: '#000'
            })
        </script>
