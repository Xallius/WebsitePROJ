<!DOCTYPE html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-styles.css'); ?>" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" media="screen, projection" />
</head>
<body>
    <!-- this is the navbar.. -->
    <div id="navbar">
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            
            <div class="collapse navbar-collapse" id="navbar-collapse-">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="reservation.html">Reservations</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li style="float:right;"><a id= acc1 href="signup.php">Sign Up</a></li>
                    <li style="float:right;"><a id= acc2 href="login.html">Log-in</a></li>
                </ul>
            </div>
        </nav>
    </div>