<?php
require_once __DIR__ . '../../app/Helpers/UrlHelper.php';

// include_once ('helper/Database.php');
// include_once ('helper/Custom.php');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Academy - Online Education Platform</title>
        <base href="<?php echo UrlHelper::baseUrl(); ?>">
        <link rel="canonical" href="<?php echo UrlHelper::baseUrl(); ?>">

        <meta name="description" content="">
        <meta name="googlebot" content="index">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="author" content="ZedCapital">
        <meta name="copyright" content="Copyright (c) 2026">
        <meta name="generator" content="ZedCapital">

        <meta name="google-site-verification" content="" />

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="">

        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:url" content="/">
        <meta property="og:site_name" content="ZedCapital">
        <meta property="og:image" content="">

        <meta property="article:publisher" content="https://www.facebook.com">
        <meta property="article:modified_time" content="26-01-2025">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@ZedCapital">
        <meta name="twitter:label1" content="Est. reading time">
        <meta name="twitter:data1" content="5 minutes">
        <meta name="twitter:title" content="" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:image" content="" />

        <!-- Bootstrap 5 CSS -->
        <link href="<?php echo UrlHelper::asset('css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Google Font: Inter -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="<?php echo UrlHelper::asset('css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo UrlHelper::asset('css/custom.css'); ?>" rel="stylesheet">
        <link href="<?php echo UrlHelper::asset('css/responsive.css'); ?>" rel="stylesheet">
        <link href="<?php echo UrlHelper::asset('css/keyframe.min.css'); ?>" rel="stylesheet">

        <!-- OwlCarousel CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>

    <body data-load="" data-click-animation="" translate="no">

        <!-- ✅ Start STICKY HEADER (Top bar + Navbar) -->
        <section>
            <div class="sticky-header">
                <!-- Header Menu -->
                <?php include_once ('elements/header-menu.php');?>
            </div>
        </section>
        <!-- ✅ End STICKY HEADER (Top bar + Navbar) -->