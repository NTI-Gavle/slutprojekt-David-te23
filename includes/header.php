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
<header class="site-header">
    <div class="header-container">
        <?php require __DIR__ . '/nav.php'; ?>
        <a href="index.php"><img src="../public/images/QuackerLogo.svg" alt="Quacker Logo" class="header-img"></a>
        <div class="search-profile-container">
            <input type="search" name="" id="header-search" placeholder="Search Quacker">
            <a href="index.php" class="profile-button"><img src="../public/images/cat2.jpg" alt="Quacker Logo" class="header-img"></a>
        </div>
    </div>
</header>

<main class="main-content">
