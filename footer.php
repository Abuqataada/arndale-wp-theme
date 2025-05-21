<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Quick Link</h4>
                <a class="btn btn-link" href="<?php echo home_url('/about'); ?>">About Us</a>
                <a class="btn btn-link" href="<?php echo home_url('/contact'); ?>">Contact Us</a>
                <a class="btn btn-link" href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a>
                <a class="btn btn-link" href="<?php echo home_url('/faqs'); ?>">FAQs & Help</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Plot 647 CADASTAL ZONE CO7 Karmo, Abuja</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+234913 030 9030, +23481 6665 6369</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@arndaleacademy.com, arndaleacademy@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://twitter.com/Arndale_academy"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/arndaleacademyabuja/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@arndale_academy"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/arndale_academy/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    <?php
                    $gallery_images = array('gallery1.png', 'group.png', 'gallery2.png', 'gallery3.png', 'gallery4.png', 'gallery5.JPG');
                    foreach ($gallery_images as $image) {
                        echo '<div class="col-4"><img class="img-fluid bg-light p-1" src="' . get_template_directory_uri() . '/images/' . $image . '" alt=""></div>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p>Subscribe to our monthly newsletter.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="<?php echo home_url(); ?>">arndaleacademy.com</a>, All Right Reserved.
                    Designed By <a class="border-bottom" href="https://abudigitalinc.wordpress.com">Abuqataada Digital Inc.</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <a href="<?php echo home_url('/cookies'); ?>">Cookies</a>
                        <a href="<?php echo home_url('/help'); ?>">Help</a>
                        <a href="<?php echo home_url('/faqs'); ?>">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>
