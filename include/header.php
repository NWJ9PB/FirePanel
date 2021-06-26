<meta charset="utf-8" />
    <?php
    if(isset($slink)) {
        if($slink == TRUE) {
            $alink = "../";
            $commitfile = file_get_contents('../include/commit.json');
            $commitdata = json_decode($commitfile);
        } elseif($slink == FALSE) {
            $alink = '';
            $commitfile = file_get_contents('include/commit.json');
            $commitdata = json_decode($commitfile);
        }
    }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo($alink);?>assets/img/apple-icon.png" rel="apple-touch-icon" sizes="76x76">
    <link href="<?php echo($alink);?>assets/img/favicon.png" rel="icon" type="image/png">
    <link href="<?php echo($alink);?>assets/fonts/font-manager.css" rel="stylesheet" />
    <link href="<?php echo($alink);?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo($alink);?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="<?php echo($alink);?>assets/vendor/fontawesome/css/all.css" rel="stylesheet" />
    <link href="<?php echo($alink);?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="<?php echo($alink);?>assets/css/soft-ui-dashboard.css?v=1.0.1" id="pagestyle" rel="stylesheet" />
    <link href="<?php echo($alink);?>assets/vendor/theme-dark-5.0.0/sweetalert2.css" rel="stylesheet"></link>
    <style>
    /* width */
    ::-webkit-scrollbar {
    width: 10px;
    }
    </style>