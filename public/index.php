<?php
$pageTitle = "Home"; // <-- set dynamic page title
require_once __DIR__ . '/../includes/header.php';
?>

<div class="trending-section mb-4 p-3 bg-light rounded shadow-sm">
    <div class="d-flex justify-content-center">
        <div class="mb-4 p-3 bg-light">
            <h5 class="fw-bold text-center">For you</h5>
            <a href="#"><div class="trending-section-card mb-4 p-3 rounded shadow-sm">
            <h5 class="fw-bold text-center">#Quack</h5>
            
        </div>
        </a>
    </div> 
     <div class="d-flex">
        <div class="mb-4 p-3 bg-light">
            <h5 class="fw-bold text-center">Following</h5>
            <a href="#"><div class="trending-section-card mb-4 p-3 rounded shadow-sm">
            <h5 class="fw-bold text-center">#Quack</h5>
            
        </div>
        </a>
    </div>            
                
</div>

<?php
require_once __DIR__ . '/../includes/footer.php';