<?php

    ob_start();
    session_start();
    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : "home";


    switch ($page) 
    { 
        case "home":
            $contents = "../views/home.php";
            break;
        case "test":
            $contents = "../views/test.php";
            break;
        case "portfolio":
            $contents = "../views/portfolio.php";
            break;
        case "services":
            $contents = "../views/services.php";
            break;
        default:
            $contents =  "../views/home.php";
            break;       
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Kitchener, Waterloo, Ontario, Web Design, Website Application Development, Content Management System, Cambridge, Guelph, Hosting, Graphic Design">
    <meta name="description" content="Klein Designs offers professional web design, graphic design, and web development in the Kitchener, Waterloo, Guelph & Cambridge area.">
    <meta name="Author" content="Klein Designs">
    <title>Klein Designs | Web Design and Development Kitchener Waterloo Guelph Cambridge</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">

            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>

        </div>
    </div>
    <!-- ./Preloader -->
    
    <!-- header -->
    <header class="navbar-fixed-top">
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#experience">experience</a></li>
                <li><a href="#projects">projects</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- ./header -->
    
    <?php require_once($contents); ?>
    
    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h2 class="size-50">Contact</h2>
                <div class="h-50"></div>
            </div>
            <div class="col-md-4" data-aos="fade-up">

                <h3>Location</h3>
                <p>Waterloo, Ontario</p>
                <h3>Mobile Number</h3>
                <p>705 934 4809</p>
                <h3>Email</h3>
                <p>sarah@kleindesigns.ca</p>

                <h3>Social Network</h3>

                <ul class="social">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="h-50"></div>
            </div>
            <div class="col-md-8" data-aos="fade-up">
                <form class="contact-bg" id="contact-form" name="contact" method="post" novalidate="novalidate">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" />
                    <input type="email" name="email" class="form-control" placeholder="Your E-mail" />
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                    <textarea name="message" class="form-control" placeholder="Your Message" style="height:120px"></textarea>
                    <button id="submit" type="submit" name="submit" class="btn btn-primary btn-full-width">Send</button>
                    <div id="success">
                        <p class="green textcenter"> Your message was sent successfully! I will be in touch as soon as I can. </p>
                    </div>
                    <div id="error">
                        <p> Something went wrong, try refreshing and submitting the form again. </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./contact -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!--  plugins  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!--  main script  -->
    <script src="js/custom.js"></script>
</body>

</html>