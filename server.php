<?php
require('settings/initial.php');
require('include/copyright.php');
//---- Page Settings ----//
$pageid = 2;
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
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="mb-xl-0 mb-4">
                        <div class="col">
                            <div class="card shadow-none bg-gradient-primary rounded rounded-2 mb-1" id="sidenavCard">
                                <div class="card-body text-left p-3 w-100">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold text-white">Allocated <sub>V</sub>CPU</p>
                                                <h5 class="font-weight-bolder mb-0 text-white">70%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-pill bg-gradient-success"><i class="fas fa-store ml-1 mr-2"></i> Allocate More</span>
                                </div>
                            </div>
                            <div class="card shadow-none bg-gradient-primary rounded rounded-2 mb-1" id="sidenavCard">
                                <div class="card-body text-left p-3 w-100">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 font-weight-bold">Allocated Memory</p>
                                                <h5 class="font-weight-bolder mb-0 text-white">2000 MB / 2000 MB (100%)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-pill bg-gradient-success"><i class="fas fa-store ml-1 mr-2"></i> Allocate More</span>
                                </div>
                            </div>
                            <div class="card shadow-none bg-gradient-primary rounded rounded-2 mb-1" id="sidenavCard">
                                <div class="card-body text-left p-3 w-100">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Allocated Disk Space</p>
                                                <h5 class="font-weight-bolder mb-0 text-white">8000 MB / 8000 MB (100%)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-pill bg-gradient-success"><i class="fas fa-store ml-1 mr-2"></i> Allocate More</span>
                                </div>
                            </div>
                            <div class="card shadow-none bg-gradient-primary rounded rounded-2 mb-1" id="sidenavCard">
                                <div class="card-body text-left p-3 w-100">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Allocated Server Port</p>
                                                <h5 class="font-weight-bolder mb-0 text-white">2 / 2 (100%)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-pill bg-gradient-success"><i class="fas fa-store ml-1 mr-2"></i> Allocate More</span>
                                </div>
                            </div>
                            <div class="card shadow-none bg-gradient-primary rounded rounded-2 mb-1" id="sidenavCard">
                                <div class="card-body text-left p-3 w-100">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Allocated Server Slot</p>
                                                <h5 class="font-weight-bolder mb-0 text-white">2 / 2 (100%)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-pill bg-gradient-success"><i class="fas fa-store ml-1 mr-2"></i> Allocate More</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-12 col-sm-12">
                    <div class="col-xl-12 col-md-12 col-sm-12 mb-1">
                        <div class="card bg-gradient-info rounded rounded-1">
                            <div class="card-header bg-transparent mb-n5">
                                <h6 class="text-white">Server List</h6>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-uppercase text-white text-xxs text-center font-weight-bolder">Server Name</th>
                                                <th class="text-uppercase text-white text-xxs text-center font-weight-bolder">Node</th>
                                                <th class="text-uppercase text-white text-xxs text-center font-weight-bolder">CPU</th>
                                                <th class="text-uppercase text-white text-xxs text-center font-weight-bolder">Memory</th>
                                                <th class="text-uppercase text-white text-xxs text-center font-weight-bolder">Disk</th>
                                                <th class="text-uppercase text-white text-xxs text-center font-weight-bolder">Port</th>
                                                <th class="text-uppercase text-white text-xxs text-center font-weight-bolder">Status</th>
                                                <th class="text-white"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <h6 class="text-xs text-white font-weight-bold mb-0 text-center">SMP</h6>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">NA-1</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">70%</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">1000 MB</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">4000 MB</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">2</p>
                                                </td>
                                                <td>
                                                    <a class="badge bg-gradient-faded-success text-white font-weight-bold text-xs">
                                                    UNRESTRICTED
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="" class="badge bg-gradient-dark text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                    Edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <h6 class="text-xs text-white font-weight-bold mb-0 text-center">Skyblock</h6>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">NA-1</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">70%</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">1000 MB</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">4000 MB</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-white font-weight-bold mb-0 text-center">2</p>
                                                </td>
                                                <td>
                                                    <a class="badge bg-gradient-faded-success text-white font-weight-bold text-xs">
                                                    UNRESTRICTED
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="" class="badge bg-gradient-dark text-white font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                                                    Edit
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 py-3">
                        <div class="col-6 col-xl-6 col-sm-12 mb-1">
                            <?php require('include/announcements.php');?>
                        </div>
                        <div class="col-6 col-xl-6 col-sm-12 mb-1">
                            <div class="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require('include/advertisement.php');?>
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

        

