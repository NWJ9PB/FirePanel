<?php
require('settings/initial.php');
require('include/copyright.php');
$pageid = 2;
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
                            <div class="card card-background shadow-none card-background-mask-info bg-info mb-1" id="sidenavCard">
                                <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1619670922021-fc1a7b7dff67?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80)"></div>
                                <div class="card-body text-left p-3 w-100">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 font-weight-bold">Allocated vCore</p>
                                                <h5 class="font-weight-bolder mb-0 text-white">0.7 vCore (70%)</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="badge badge-pill bg-gradient-success"><i class="fas fa-store ml-1 mr-2"></i> Allocate More</span>
                                </div>
                            </div>
                            <div class="card card-background shadow-none card-background-mask-info bg-info mb-1" id="sidenavCard">
                                <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1542978709-19c95dc3bc7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80)"></div>
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
                            <div class="card card-background shadow-none card-background-mask-info bg-info mb-1" id="sidenavCard">
                                <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1597138804456-e7dca7f59d54?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80)"></div>
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
                            <div class="card card-background shadow-none card-background-mask-info bg-info mb-1" id="sidenavCard">
                                <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1520869562399-e772f042f422?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=752&q=80)"></div>
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
                            <div class="card card-background shadow-none card-background-mask-info bg-info mb-1" id="sidenavCard">
                                <div class="full-background" style="background-image: url(https://images.unsplash.com/photo-1489436969537-cf0c1dc69cba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=269&q=80)"></div>
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
                    <div class="col-xl-12 col-md-12 col-sm-12 mb-4">
                        <div class="card bg-gradient-secondary">
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

        

