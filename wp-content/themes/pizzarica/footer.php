<?php

$facebook_url = get_field('facebook', 319);
$google_maps_url = get_field('google_maps', 319);
$instagram_url = get_field('instagram', 319);
$messenger_url = get_field('messenger', 319);
$mail = get_field('mail', 319);

?>

<div data-aos="fade-up" data-aos-once="true">

    <div class="footer-top">
        <div class="color-filter">
        </div>
    </div>
    <footer class="footer bg-chocolate">
        <div class="d-flex justify-content-center py-5 text-center">
            <div class="row align-items-center align-items-center">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <img src="<?php echo get_template_directory_uri() . '/pictures/logo.png' ?>" alt="" class="logo-lg" />
                    </div>
                    <span class="text-vanilla text-uppercase text-shadow">
                        &copy; Copyright 2020 Bajo Zero. All right reserved.
                    </span>
                </div>

                <div class="col-12 col-md-6 mt-4 mt-md-0">
                    <p class="text-vanilla text-uppercase mt-2 text-shadow">Bajo Zero on social medias</p>
                    <ul class="social-media-icon mx-auto mb-5">
                        <li>
                            <a href="<?php echo $facebook_url; ?>" alt="" target="_blank">
                                <i class="fab fa-facebook-square facebook-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $google_maps_url; ?>" alt="" target="_blank">
                                <i class="fas fa-map-marked-alt maps-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $instagram_url; ?>" alt="" target="_blank">
                                <i class="fab fa-instagram-square instagram-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $messenger_url; ?>" alt="" target="_blank">
                                <i class="fab fa-facebook-messenger messenger-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo $mail; ?>" alt="" target="_blank">
                                <i class="fas fa-envelope-square mail-icon"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="text-vanilla text-shadow">
                        Website created by Benjamin Jaume (<a href="http://www.benjaminjau.me" alt="" target="_blank" class="link-vanilla link-decoration">www.benjaminjau.me</a>)
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>

</main>

<?php wp_footer(); ?>

</body>

</html>