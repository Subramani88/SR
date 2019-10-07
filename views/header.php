<?php include(dirname(__DIR__).'/app.php');
$deviceIs = theDeviceIs(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google-site-verification" content="KAICIdivkBBkmFlYVaMUo64saV5k4qm5F1E29ls-7YI" />	
	<meta name="description" content="META DESCRIPTION"/>
    <meta property="og:title" content="OG TITLE"/>
	<meta property="og:description" content="OG DESCRIPTION"/>
	<meta property="og:type" content="Website"/>
	<meta property="og:url" content="https://www.saransrefelctions.com/"/>
	<meta property="og:image" content="image-url"/>
	<meta property="og:site_name" content="Sarans Reflections - Photographe Annecy 74" />
    <title>Sarans Reflections - Photographe Mariage - Naissance - Grossesse - Famille - Portrait - Mode - Enfant</title>
	<link href="/assets/images/favicon.ico" rel="shortcut icon" type="images/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:300,400,600&display=swap" rel="stylesheet">
    <link href="/assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/vegas/vegas.min.css" rel="stylesheet" />
    <link href="/assets/aos/aos.css" rel="stylesheet" />
	<link href="/assets/css/style.css" rel="stylesheet" />
    <?php if($deviceIs == "mobile") { ?>     
    <link href="/assets/css/mobile.css" rel="stylesheet">
    <?php } else if($deviceIs == "tablet") { ?>     
    <link href="/assets/css/tablet.css" rel="stylesheet">
    <?php } ?>
</head>
<body id="home">
    <header id="main-navigation" class="top-nav fixed-top">
        <div class="container">
            <?php if($deviceIs != "mobile") { // Desktop ?>
            <nav class="nav justify-content-center text-uppercase">
                <a href="#about" class="nav-link my-auto">A propos</a>
                <a href="#services" class="nav-link my-auto">Services</a>
                <a href="#gallery" class="nav-link my-auto">Gallery</a>
                <a href="#home" class="nav-link nav-logo"><img src="/assets/images/SRlsmall.png" alt="WEBSITE TITLE" /></a>
                <a href="#tarif" class="nav-link my-auto">Tarif</a>
                <a href="#partners" class="nav-link my-auto">Partenaires</a>
                <a href="#contact" class="nav-link my-auto">Contact</a>
            </nav>
        <?php } else if($deviceIs == "mobile") { ?>
            <nav class="navbar pl-0 pt-0 pb-0 d-flex justify-content-between">
                <a href="#home" class="navbar-brand d-flex align-items-center">
                    <img src="/assets/images/SRlsmall.png" alt="WEBSITE TITLE" />
                </a>
                <button class="navbar-toggler border-warning" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon ion-ios-menu text-warning"></span>
                </button>
            </nav>
        <?php } ?>
        </div>
    </header>
    <section class="hero">
        <div class="container hero-container text-center">
            <div class="main-logo mx-auto my-auto">
                <img src="/assets/images/saransreflections_intro_logo.png" alt="" class="img-fluid mb-3"><br>
                <img src="/assets/images/saransreflections_intro_text.png" alt="" class="img-fluid">
            </div>
            <div class="scroll-down mx-auto my-auto">
                <span data-scrolldown="true" class="color-or">
                    <i class="icon ion-ios-arrow-down fa-5x color-or"></i>
                </span>
            </div>
        </div>
    </section>
