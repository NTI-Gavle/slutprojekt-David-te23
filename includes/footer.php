        </main> <!-- closes col-lg-9 -->
    </div> <!-- closes row -->
</div> <!-- closes container -->

<footer class="site-footer py-4 mt-auto">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">

            <!-- vänster sida, logga och copyright -->
            <div class="d-flex flex-column flex-md-row align-items-center mb-3 mb-md-0">
                <a href="index.php">
                    <img src="../public/images/QuackerLogo.svg" alt="Quacker Logo" class="header-img">
                </a>
                
                <p class="m-0">&copy; <?= date('Y') ?> Quacker. All rights reserved.</p>
            </div>

            <!-- Höger sida, länkar -->
            <nav class="footer-links d-flex flex-column flex-md-row align-items-center gap-3 gap-md-4">
                <a href="#">About us</a>
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Policy</a>
            </nav>
        </div>
    </div>
</footer>
</body>
</html>