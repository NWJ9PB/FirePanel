<!DOCTYPE html>
<html lang="en">

<head>
    <?php require(__DIR__."/private/cmp/assets.php");?>

    <title>FirePanel</title>
</head>

<body class="bg-default shadow-none">
    <?php require(__DIR__.'/private/cmp/sidenav.php');?>

    <div class="main-content" id="panel">
        <?php require(__DIR__.'/private/cmp/topnav.php');?>

        <div class="header bg-default pb-6">
            <div class="container-fluid mb-5">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#">Dash</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                                </ol>
                            </nav>

                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="#" class="btn btn-sm btn-neutral">Print</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-gradient-info border-0 shadow-none">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Deployed Servers</h5>
                                            <span class="h2 font-weight-bold mb-0 text-white">3/5</span>
                                            <div class="progress progress-xs mt-3 mb-0">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <a href="manageserver.php" class="text-nowrap text-white font-weight-600">See details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-gradient-danger border-0 shadow-none">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Memory Used</h5>
                                            <span class="h2 font-weight-bold mb-0 text-white">1200 / 2000 MB</span>
                                            <div class="progress progress-xs mt-3 mb-0">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <a href="manageserver.php" class="text-nowrap text-white font-weight-600">See details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-gradient-primary border-0 shadow-none">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">CPU Used</h5>
                                            <span class="h2 font-weight-bold mb-0 text-white">3 / 5 vCore</span>
                                            <div class="progress progress-xs mt-3 mb-0">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <a href="manageserver.php" class="text-nowrap text-white font-weight-600">See details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-gradient-yellow border-0 shadow-none">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Port Used</h5>
                                            <span class="h2 font-weight-bold mb-0 text-white">3 / 5 Port</span>
                                            <div class="progress progress-xs mt-3 mb-0">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <a href="manageserver.php" class="text-nowrap text-white font-weight-600">See details</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require(__DIR__."/private/cmp/script.php") ?>
    

</body>

</html>