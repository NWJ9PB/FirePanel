<?php require('settings/initial.php');?>
<?php require('include/copyright.php');?>

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
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card rounded bg-dark shadow-xl border-3 border-warning">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Remaining Credit</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">$12.25</h5>
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <div class="icon icon-shape icon-sm bg-gradient-danger shadow text-center border-radius-md">
                                        <i class="fas fa-money-bill mt-n12" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="badge badge-pill bg-gradient-faded-warning"><i class="fas fa-wallet ml-1 mr-2"></i> Add Funds</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card rounded bg-dark shadow-xl border-3 border-warning">
                        <div class="card-body p-3">
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
                            <span class="badge badge-pill bg-gradient-faded-warning"><i class="fas fa-book ml-1 mr-2"></i> Check Plans</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card rounded bg-dark shadow-xl border-bottom-0 border-3 border-warning">
                        <div class="card-body p-3">
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
                            <span class="badge badge-pill bg-gradient-faded-warning"><i class="fas fa-server ml-1 mr-2"></i> Server List</span>
                        </div>
                        <div class="progress-wrapper">
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card rounded bg-dark shadow-xl border-3 border-warning">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-9">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">MiniCoins</p>
                                        <h5 class="font-weight-bolder mb-0 text-white">324</h5>
                                    </div>
                                </div>
                                <div class="col-3 text-end">
                                    <div class="icon icon-shape icon-sm bg-gradient-danger shadow text-center border-radius-md">
                                        <i class="fas fa-money-bill mt-n12" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <span class="badge badge-pill bg-gradient-faded-warning"><i class="fas fa-coins ml-1 mr-2"></i> Earn</span>
                        </div>
                    </div>
                </div>
            </div>            
            <footer class="footer pt-3">
                <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-left">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </footer>
        </div>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.1"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="assets/vendor/smooth-scrollbar-8.6.2/smooth-scrollbar.js"></script>


        

