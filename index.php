<!DOCTYPE html>
<html lang="en">
<head>
    <?php require(__DIR__."/private/cmp/assets.php");?>

    <title>FirePanel</title>
</head>

<body class="bg-default">
    <?php require(__DIR__."/private/cmp/navbar.php") ?>

    <div class="header bg-gradient-info py-3 py-lg-5 pt-lg-6">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Welcome!</h1>
                        <p class="text-lead text-white"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>  
    <div class="container mt--8 pb-5 bg-transparent">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-10">
                <div class="row mt-4 mb-1">
                    <div class="card-body py-1">
                        <div class="row">
                            <div class="col-lg-8 d-none d-lg-block right-6 rounded-lg rounded-sm">
                                <img src="assets/img/icons/Icon.png" width="700" height="700" class="rounded-left bg-blue">
                            </div>
                            <div class="col-lg-4 align-content-center justify-content-center bg-gradient-blue rounded rounded-sm">
                                <div class="my-5">
                                    <div class="text-center">
                                        <h1 class="text-white m-4"><b>FirePanel</b></h1>
                                    </div>
                                    <h6 class="text-center text-info bg-translucent-default rounded">Sign in with</h6>
                                    <a href="settings/discord.php" class="btn bg-default text-white btn-block mb-2">
                                        <i class="fab fa-discord fa-fw"></i> Discord
                                    </a>
                                    <a href="settings/discord.php" class="btn bg-default text-white btn-block mb-4">
                                        <i class="fab fa-github fa-fw"></i> GitHub <!-- (If you are a complete asshole)-->
                                    </a>
                                    <hr class="bg-white">
                                    <h6 class="text-center text-info bg-translucent-default rounded">Or Manual Credentials</h6>
                                    <form role="form">
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Email" type="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-lock-open"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Password" type="password">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-default shadow-none m-4">Log in</button>
                                        </div>
                                        <div class="card card-body bg-gradient-default border-success">
                                            <h6 class="text-center text-red">BY SIGNING IN, YOU AGREE TO THE TERMS AND CONDITIONS</h6>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require(__DIR__."/private/cmp/footer.php") ?>

    <?php require(__DIR__."/private/cmp/scripts.php") ?>

</body>

</html>