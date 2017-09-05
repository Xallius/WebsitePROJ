<!DOCTYPE html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-styles.css'); ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/materialize.css"); ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.css') ?>" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url('iconfont/material-icons.css') ?>" media="screen, projection" />
</head>
<body>

<!-- Dropdown for CMS -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Home</a></li>
  <li><a href="#!">About Us</a></li>
  <li><a href="#!">Services</a></li>
  <li><a href="#!">Reservations</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
    <li><a href="<?php echo base_url('Main/pendingReservation'); ?>">Pending <span class="new badge">10</span></a></li>
    <li><a href="<?php echo base_url('Main/bookedReservation'); ?>">Booked <span class="new badge">9</span></a></li>
    <li><a href="<?php echo base_url('Main/cancelledReservation'); ?>">Cancelled <span class="new badge">8</span></a></li>
</ul>
<ul id="dropdown3" class="dropdown-content">
  <li><a href="<?php echo base_url('Main/pendingReservationCustomer'); ?>">Pending</a></li>
  <li><a href="<?php echo base_url('Main/bookedReservationCustomer'); ?>">Booked</a></li>
  <li><a href="<?php echo base_url('Main/cancelledReservationCustomer'); ?>">Cancelled</a></li>
</ul>
    <!-- this is the navbar.. -->
<div class="nav-wrapper">
    <nav role="navigation">
            <ul>
                <li><a href="<?php echo base_url('Main'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('Main/about'); ?>">About Us</a></li>
                <li><a href="<?php echo base_url('Main/services'); ?>">Services</a></li>
                
                <?php if ($this->session->userdata('login')){ ?>
                <?php if ($this->session->userdata('uid') == 0){ ?>
                <!-- redirects to customer profile -->
                <li><a href="<?php if (!$this->session->userdata('login')){echo '#';} else{ echo base_url('Main/reservation');} ?>">Reservations</a></li>
                        <li style="float:right;"><a href="<?php echo base_url('Main/logout'); ?>">Logout</a></li>
                        <li style="float:right;"><a class="dropdown-button" href="#!" data-activates="dropdown3">Appointments<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li style="float:right;"><a href="<?php echo base_url('Main/custMessage'); ?>"><i class="material-icons">mail</i></a></li>
                    <!-- redirects to admin -->
                        <?php } elseif ($this->session->userdata('uid') == 1) { ?>
                            <li><a href="<?php echo base_url('Main/dashboard'); ?>">Dashboard</a></li>
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Content Management<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Appointments<i class="material-icons right">arrow_drop_down</i></a></li>
                            <li><a href="<?php echo base_url('Main/adminMessages'); ?>">Messages</a></li>
                            <li style="float:right;"><a href="<?php echo base_url('Main/logout'); ?>">Logout</a></li>
                        <?php } ?>
                    <?php } else { ?>
                    <!-- if no one is logged in, display signup and login button -->
                    <li style="float:right;"><a href="<?php echo base_url('Main/signup'); ?>">Sign Up</a></li>
                    <li style="float:right;"><a href="<?php echo base_url('Main/login'); ?>">Log-in</a></li>
                    <?php }?>
                </ul>
        </nav>
</div>