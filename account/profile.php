<?php
require('../settings/initial.php');
require('../include/copyright.php');
//---- Page Settings ----//
$pageid = 4;
$slink = TRUE;
//-----------------------//
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Overview</title>
    <?php require('../include/header.php');?>

</head>

<body class="g-sidenav-show bg-dark">
    <?php require('../include/sidenav.php');?>

    <main class="main-content mt-1 border-radius-lg">
        <?php require('../include/topbar.php');?>

        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-info opacity-6"></span>
            </div>
            <div class="card card-body bg-dark border border-info border-2 mx-4 mt-n6">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="https://cdn.discordapp.com/avatars/287118222174453760/a_50409e758fff6a86f28c3255a3f75b5f.png" alt="..." class="w-100 border-radius-lg shadow-sm">
                            <a href="javascript:;" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                                <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1 text-info">
                                InterStellar<sub>#3423</sub>
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                <span class="badge bg-info">Developer</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Data Collected</h6>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder">Discord Data</h6>
                            <ul class="">
                                <li class="border-0 px-0">
                                    <div class="ps-0">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0">Username</label>
                                    </div>
                                </li>
                                <li class="border-0 px-0">
                                    <div class="ps-0">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0">Discriminator</label>
                                    </div>
                                </li>
                                <li class="border-0 px-0">
                                    <div class="ps-0">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0">UserID</label>
                                    </div>
                                </li>
                                <li class="border-0 px-0">
                                    <div class="ps-0">
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0">Discord Email</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Profile Information</h6>
                                </div>
                                <div class="col-md-4 text-right">
                                    <a href="javascript:;">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                            </p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; Alec M. Thompson</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (44) 123 1234 123</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; alecthompson@mail.com</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; USA</li>
                                <li class="list-group-item border-0 ps-0 pb-0">
                                <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-facebook fa-lg"></i>
                                </a>
                                <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                                <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php require('../include/footer.php');?>
        </div>
    </main>
    <?php require('../include/scripts.php');?>
