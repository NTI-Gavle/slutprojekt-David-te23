<?php
$pageTitle = "Home"; // <-- set dynamic page title
require_once __DIR__ . '/../includes/header.php';
?>

<div class="p-3 rounded shadow-sm feed-container">
    <div class="d-flex flex-row justify-content-center gap-4 sticky-top mb-3">
        <!-- All Quacks tab -->
        <button class=" feed-tab active p-3 bg-light rounded shadow w-50 d-flex justify-content-center border-0">
            <span class="m-0 fw-bold">All Quacks</span>
        </button>
        <!-- Following Quacks tab -->
        <button class="feed-tab p-3 bg-light rounded shadow w-50 d-flex justify-content-center border-0">
            <span class="m-0 fw-bold">Following</span>
        </button>
    </div>    

    <!-- New Quack container -->
    <div class="create-quack-card bg-white p-3 rounded shadow-sm mb-4">
        <div class="d-flex gap-3">
            <div class="profile-pic-placeholder"></div>
            <div class="flex-grow-1">
                <textarea rows="1" class="form-control border-0 fs-5 mb-2" placeholder="What is quacking?"></textarea>
                <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                    <div class="d-flex gap-3">
                        <button class="btn btn-link p-0 text-success">mediaIcon</button>
                        <button class="btn btn-link p-0 text-success">emojiIcon</button>
                    </div>
                    <button class="btn btn-quack px-4 fw-bold shadow-sm">Quack!</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quack inlägg -->
    <div class="quack-card bg-white p-3 rounded shadow-sm mb-3">
        <div class="d-flex gap-3">
            <div class="profile-pic-placeholder bg-secondary-subtle"></div>
            <div class="flex-grow-1">
                <div class="d-flex align-items-center gap-2">
                    <span class="fw-bold">George</span>
                    <span class="text-muted">@george123 * 1hr ago</span>
                </div>
                <p class="mt-2 fs-5">DUCKS ARE THE BEST! #quackify</p>
                <div class="d-flex gap-5 mt-3 text-muted">
                    <span class="action-icon">💬 4</span>
                    <span class="action-icon">🔄 0</span>
                    <span class="action-icon">❤️ 15</span>
                </div>
            </div>
        </div>
    </div>


</div>

<?php
require_once __DIR__ . '/../includes/footer.php';