<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WebCreate</title>
    <link rel="shortcut icon" href="<?php echo theme_path; ?>assets/default/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo theme_path; ?>assets/default/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo theme_path; ?>library/style/app.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700,900&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo theme_path; ?>style.css">
    <?php wp_head(); ?>
</head>
<body >


<header>
    <section class="navArea" id="myHeader">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light w-100">
                    <a class="navbar-brand" href="#">
                        <img class="img1" src="<?php echo theme_path; ?>assets/images/logo.png" alt="Logo" loading="lazy">
                        <img class="img2" src="<?php echo theme_path; ?>assets/images/logo1.png" alt="Logo" loading="lazy">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutSec">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#plansSec">Our Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faqSec">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-1" href="#contactSec">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>
</header>
