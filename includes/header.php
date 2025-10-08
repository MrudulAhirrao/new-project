<?php
// This allows each page to set its own title and description for SEO.
$pageTitle = $pageTitle ?? 'NEET & JEE Counselling | V4Edu Solution';
$metaDescription = $metaDescription ?? 'With over 23 years of expertise, our team of 50+ experienced counsellors provides comprehensive UG and PG counselling for MBBS, JEE, and more.';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">

    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>" />
    <meta property="og:image" content="../assets/Images/logo.png" />
    <meta property="og:url" content="https://v4edusolution.com/" />
    <meta property="og:type" content="website" />

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/favicon/manifest.json">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:wght@400;600;700&family=Anek+Bangla:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>
<body>

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <a class="navbar-brand" href="https://v4edusolution.com">
            <img src="../assets/img/logo.png" alt="v4edusolution Logo">
        </a>

        <nav class="nav-menu-wrapper d-none d-lg-flex">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="../views/index.php">Home</a></li>
                 <li class="nav-item"><a class="nav-link" href="../views/index.php#Service">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/instute.php">Institute</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/neet-counsellor-jaipur.php">Counsellor</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/packages.php">Packages</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/contact.php">Support</a></li>
            </ul>
        </nav>

        <a href="tel:+919462363646" class="btn-call-now d-none d-lg-block">Call Now</a>

        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" aria-controls="mobileMenuOffcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</header>
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenuOffcanvas" aria-labelledby="mobileMenuOffcanvasLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand" href="https://v4edusolution.com">
            <img src="../assets/img/logo.png" alt="v4edusolution Logo">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body">
    
        <div class="mobile-nav-menu">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="../views/index.php">Home</a></li>
                 <li class="nav-item"><a class="nav-link" href="../views/index.php#Service">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/instute.php">Institute</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/neet-counsellor-jaipur.php">Counsellor</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/packages.php">Packages</a></li>
                <li class="nav-item"><a class="nav-link" href="../views/contact.php">Support</a></li>
        </div>

        <div class="mobile-nav-cta">
            <a href="tel:+919462363646" class="btn-call-now">Call Now</a>
        </div>
        
    </div>
</div>