<!DOCTYPE html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-styles.css'); ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/materialize.css"); ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" type="text/css" media="screen, projection" />
</head>
<body>
    <!-- this is the navbar.. -->
    <div id="navbar">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('Main'); ?>">Home</a></li>
                    <li><a href="<?php echo base_url('Main/about'); ?>">About Us</a></li>
                    <li><a href="<?php echo base_url('Main/services'); ?>">Services</a></li>
                    <li><a href="<?php if (!$this->session->userdata('login')){echo '#';} else{ echo base_url('Main/reservation');} ?>">Reservations</a></li>
                    <li><a href="<?php echo base_url('Main/gallery'); ?>">Gallery</a></li>
                    <?php if ($this->session->userdata('login')){ ?>
                    <li style="float:right;"><a href="<?php echo base_url('Main/profile'); ?>">Hello <?php echo $this->session->userdata('uname'); ?></a></li>
                    <li style="float:right;"><a href="<?php echo base_url('Main/logout'); ?>">Logout</a></li>
                    <?php } else { ?>
                    <li style="float:right;"><a id= acc1 href="<?php echo base_url('Main/signup'); ?>">Sign Up</a></li>
                    <li style="float:right;"><a id= acc2 href="<?php echo base_url('Main/login'); ?>">Log-in</a></li>
                    <?php }?>
                </ul>
            </div>
        </nav>
    </div>