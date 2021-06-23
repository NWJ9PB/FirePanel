<?php
//require('settings/initial.php');
require('include/copyright.php');
//---- Page Settings ----//
$pageid = 0;
$slink = FALSE;
//-----------------------//
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <?php require('include/header.php');?>

</head>

<body class="g-sidenav-show bg-dark">
    <section>
        <div class="page-header section-height-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain border border-info border-3 mt-8 py-4">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                <p class="mb-0 text-secondary h6">Select a way to login <sub class="text-gradient text-info text-uppercase mx-2">(Account Creation is automatic)</sub></p>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="authentication/oauth/discord.php" class="btn btn-lg text-white btn-icon" style="background-color: rgb(157, 71, 255);" type="button">
                                        <div class="d-flex align-items-center">
                                            <i class="fab fa-discord me-2" aria-hidden="true"></i>
                                            Discord Authentication (Recommended)
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center">
                                    <a href="authentication/oauth/google.php" class="btn bg-gradient-secondary btn-icon" type="button">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-key me-2" aria-hidden="true"></i>
                                            Credential Authentication
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer border border-info rounded rounded-3 m-3 text-center justify-content-center align-content-center ">
                                <p class="m-1 text-sm text-secondary mx-auto rounded p-2">
                                    By SIGNING IN and SIGNING UP, You agree to our Terms and Conditions, Privacy Policy, and other legal documentation which is available in
                                    <a href="tos-privacypolicy.php" class="text-info text-gradient font-weight-bold">this link</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8 card card-background bg-info card-background-mask-dark">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('assets/img/Wikimedia_Foundation_Servers-8055_35.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer mt-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Landing Page
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Products
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a>
        </div>
      </div>
    </div>
  </footer>

</body>