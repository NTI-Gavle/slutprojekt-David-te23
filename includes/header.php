<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) : 'My Home Project' ?></title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="js/app.js" defer></script>
    
</head>
<body>
<header class="site-header" id="siteheader">
    <div class="header-container container-fluid d-flex align-items-center justify-content-between px-3">
        <!-- vänster sida av header: nav + sök-->
        <div class="nav-container d-flex ps-0 flex-grow-1 flex-b-0">
            <?php require __DIR__ . '/nav.php'; ?>
            
            <!-- sök ikon (visas bara på mobil) -->
            <button class="btn text-white d-lg-none ms-2 p-0" id="mobileSearchBtn" type="button">
            <svg xmlns="http://www.w3.org" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
            <input type="search" class="form-control mobile-search-input" placeholder="Search Quacker...">
            <button class="btn-close btn-close-white d-none" id="closeSearchBtn"></button>
        </div>

        <!-- mitten av header: quacker logga -->
        <div class="text-center header-logo-container">
        <a href="index.php">
            <img src="../public/images/QuackerLogo.svg" alt="Quacker Logo" class="header-img">
        </a>
        </div>

        <!-- höger sida: sökfält + profil -->
        <div class="search-profile-container flex-grow-1 d-flex justify-content-end align-items-center flex-b-0">
            <!-- döljs på mobil (d-none), visas på desktop (d-lg-block) -->
            <input type="search" name="" id="header-search" placeholder="Search Quacker" class="form-control d-none d-lg-block me-3 qSearchBar">

            <a href="index.php" class="profile-button p-0 m-0">
                <img src="../public/images/cat2.jpg" alt="Quacker Logo" class="header-img">
            </a>
        </div>
    </div>
</header>

<div class="container py-4">
    <div class="row gx-4">

    <?php 
    $currentPage = basename($_SERVER['PHP_SELF']);

    $showSidebar = ($currentPage !== 'messages.php');
            
    if ($showSidebar): ?>
        <!-- Sidebar: Trending & Recommendations ONLY SHOWS IF NOT ON messages.php-->
        <aside class="col-lg3 col-md-3">
            <div class="trending-section mb-4 p-3 bg-light rounded shadow-sm">
                <h5 class="fw-bold text-center">Trending now</h5>
                <a href="#"><div class="trending-section-card mb-4 p-3 rounded shadow-sm">
                    <h5 class="fw-bold text-center">#Quack</h5>
                </div>
                </a>
                
                <!-- trending tag code goes here -->
            </div>
            <div class="suggestions-section p-3 bg-light rounded shadow-sm">
                <h5 class="fw-bold text-center">You might know</h5>
                <!-- reccomendations code goes here -->
            </div>
        </aside>

        <!-- Main column narrower to fit sidebar -->
        <main class="col-lg9 col-md-9">
    <?php else : ?>
        <!-- main column, full width for messages.php -->
        <main class="col-12">
    <?php endif; ?>

