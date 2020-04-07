<?php

/**
 Template Name: The shop
 */

$header = get_field('header');

$row_1 = get_field('row_1');
$row_2 = get_field('row_2');
$row_3 = get_field('row_3');

$section_our_secret = get_field('section_our_secret');
$gallery = get_field('gallery');
$section_hiring = get_field('section_hiring');
$quote = get_field('quote');

?>

<?php get_header(); ?>
    
<div class="container-fluid m-0 p-0">
    <div class="img-text-container video-container top-row-shop">
        <?php 
            if($header['background_picture']['ID']) {
                echo wp_get_attachment_image($header['background_picture']['ID'], '', false, 'class=img-cover slumber');
            } else {
                echo wp_get_attachment_image($header['background_picture'], '', false, 'class=img-cover slumber');
            }
        ?>
        <video autoplay loop muted class="slumber bg-0-50-black">
            <source src="<?php echo get_template_directory_uri() . '/pictures/videos/presentation.mp4' ?>" type="video/mp4">
        </video>
        <span class="centered m-0">
            <h1 class="title-vanilla display-2 text-uppercase">
                The shop
            </h1>
        </span>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 px-0" data-aos="fade-right" data-aos-once="true">
            <div class="item-row-shop">
                <p id="bg-row-1-shop">
                    <?php
                        if($row_1['picture']['ID']) {
                            echo wp_get_attachment_image($row_1['picture']['ID'], '', false, 'class=img-cover slumber');
                        } else {
                            echo wp_get_attachment_image($row_1['picture'], '', false, 'class=img-cover slumber');
                        }
                    ?>
                </p>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3921.371813821639!2d-85.44061568520051!3d10.62819579242223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f757d2b24d3791d%3A0x40a80dc7cdbb02e7!2sHelader%C3%ADa%20Bajo%20Zero!5e0!3m2!1sen!2scr!4v1585854492094!5m2!1sen!2scr"
                    width="100%"
                    height="500" 
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"
                ></iframe>
            </div>
        </div>
        <div class="col-12 col-md-6 bg-chocolate item-row-shop" data-aos="fade-left" data-aos-once="true">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-green text-uppercase mb-2">
                    <?php echo $row_1['title']; ?>
                </h1>
                <div class="text-vanilla h5 m-0">
                    <?php echo $row_1['content']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 bg-vanilla order-1 order-md-0 item-row-shop" data-aos="fade-right" data-aos-once="true">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-green text-uppercase mb-2">
                    <?php echo $row_2['title']; ?>
                </h1>
                <div class="text-chocolate h5 m-0">
                    <p class="m-0 px-lg-5">
                        <?php echo $row_2['content']; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 px-0 order-0 order-md-1" data-aos="fade-left" data-aos-once="true">
            <div class="slumber">
                <div class="item-row-shop">
                    <?php
                        if($row_2['picture']['ID']) {
                            echo wp_get_attachment_image($row_2['picture']['ID'], '', false, 'class=img-cover slumber');
                        } else {
                            echo wp_get_attachment_image($row_2['picture'], '', false, 'class=img-cover slumber');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 px-0" data-aos="fade-right" data-aos-once="true">
            <div class="slumber">
                <div class="item-row-shop">
                    <?php
                        if($row_3['picture']['ID']) {
                            echo wp_get_attachment_image($row_3['picture']['ID'], '', false, 'class=img-cover slumber');
                        } else {
                            echo wp_get_attachment_image($row_3['picture'], '', false, 'class=img-cover slumber');
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 bg-chocolate item-row-shop" data-aos="fade-left" data-aos-once="true">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100 py-5 px-0 px-sm-3 px-md-5">
                <h1 class="title-green text-uppercase mb-2">
                    <?php echo $row_3['title']; ?>
                </h1>
                <div class="text-vanilla h5 m-0">
                    <p class="m-0 px-lg-5">
                        <?php echo $row_3['content']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-green">
    <div class="container py-5">
        <h1 class="title-chocolate display-4 text-center text-uppercase mt-0">
            Our secret
        </h1>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <p class="h3 text-vanilla text-center text-uppercase font-impact mt-5 mt-sm-0 mb-md-4">
                    <?php echo $section_our_secret['1']['title']; ?>
                </p>
                <div class="image-box rounded">
                    <?php
                        if($section_our_secret['1']['picture']['ID']) {
                            echo wp_get_attachment_image($section_our_secret['1']['picture']['ID'], '', false, 'class=img-fluid slumber');
                        } else {
                            echo wp_get_attachment_image($section_our_secret['1']['picture'], '', false, 'class=img-fluid slumber');
                        }
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <p class="h3 text-vanilla text-center text-uppercase font-impact mt-5 mt-sm-0 mb-md-4">
                    <?php echo $section_our_secret['2']['title']; ?>
                </p>
                <div class="image-box rounded">
                    <?php
                        if($section_our_secret['2']['picture']['ID']) {
                            echo wp_get_attachment_image($section_our_secret['2']['picture']['ID'], '', false, 'class=img-fluid slumber');
                        } else {
                            echo wp_get_attachment_image($section_our_secret['2']['picture'], '', false, 'class=img-fluid slumber');
                        }
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <p class="h3 text-vanilla text-center text-uppercase font-impact mt-5 mt-sm-0 mb-md-4">
                    <?php echo $section_our_secret['3']['title']; ?>
                </p>
                <div class="image-box rounded">
                    <?php
                        if($section_our_secret['3']['picture']['ID']) {
                            echo wp_get_attachment_image($section_our_secret['3']['picture']['ID'], '', false, 'class=img-fluid slumber');
                        } else {
                            echo wp_get_attachment_image($section_our_secret['3']['picture'], '', false, 'class=img-fluid slumber');
                        }
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mt-4 mt-lg-0">
                <p class="h3 text-vanilla text-center text-uppercase font-impact mt-5 mt-sm-0 mb-md-4">
                    <?php echo $section_our_secret['4']['title']; ?>
                </p>
                <div class="image-box rounded">
                    <?php
                        if($section_our_secret['4']['picture']['ID']) {
                            echo wp_get_attachment_image($section_our_secret['4']['picture']['ID'], '', false, 'class=img-fluid slumber');
                        } else {
                            echo wp_get_attachment_image($section_our_secret['4']['picture'], '', false, 'class=img-fluid slumber');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h1 class="title-chocolate display-4 text-center text-uppercase" data-aos="fade-down" data-aos-once="true">
        Gallery
    </h1>

    <div class="row text-center text-lg-left">

        <?php
            foreach ($gallery as $picture) {
                if($picture) {
                    if($picture['ID']) {
                        $id = $picture['ID'];
                    } else {
                        $id = $picture;
                    }
                    ?>
                    <div class="col-12 col-sm-6 col-lg-4" data-aos="flip-left" data-aos-once="true">
                        <div class="frame mb-4">
                            <figure class="m-0">
                                <?php echo wp_get_attachment_image($id, '', false, 'class=img-fluid slumber'); ?>
                            </figure>
                        </div>
                    </div>
                    <?php
                }
            } ?>

    </div>
</div>

<?php 
    if($section_hiring['status'] == "Yes") { ?>
        <div class="container-fluid container-hiring bg-green my-5">
            <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
                <h1 class="display-4 font-impact text-vanilla mb-3 mt-0" data-aos="fade-down" data-aos-once="true">
                    <?php echo $section_hiring['title'] ?>
                </h1>
                <p class="h4 text-chocolate font-weight-light" data-aos="fade-left" data-aos-once="true">
                    <?php echo $section_hiring['content'] ?>
                </p>
                <div class="text-center mt-2" data-aos="fade-up" data-aos-once="true">
                    <a href="/bajozero/contact/" class="btn btn-vanilla rounded-0 hvr-underline-from-center" alt="">
                        Contact us
                    </a>
                </div>
            </div>
        </div>

        <hr class="divider w-50" />
<?php
    }
?>

<?php
    if($quote['display'] == "Yes") { ?>
    <div class="container text-center my-5" data-aos="fade-up" data-aos-once="true">
        <p>
            <?php
                if($quote['picture']['ID']) {
                    echo wp_get_attachment_image($quote['picture']['ID'], '', false, 'class=img-quote rounded slumber shadow-picture-sm img-fluid');
                } else {
                    echo wp_get_attachment_image($quote['picture'], '', false, 'class=img-quote rounded slumber shadow-picture-sm img-fluid');
                }
            ?>
        </p>

        <blockquote class="h3 blockquote animated pulse infinite slow">
            <i class="mb-0 text-green">
                <?php echo $quote['content']; ?>
            </i>
            <footer class="blockquote-footer text-pink">
                <?php echo $quote['author']; ?>
            </footer>
        </blockquote>
    </div>
<?php
    }
?>

<?php get_footer(); ?>