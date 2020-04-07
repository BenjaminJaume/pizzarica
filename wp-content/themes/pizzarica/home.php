<!-- Blog Post Page -->

<?php

$quote = get_field('quote', get_option('page_for_posts'));

get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-3 title-green text-center text-uppercase animated slow fadeInDown">
            Latest news
        </h1>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card-deck card-deck-blog-page">
                <?php
                if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="card">
                            <div class="card-header bg-chocolate text-uppercase text-center">
                                <a href="<?php echo get_post_permalink(); ?>" alt="" class="link-vanilla link-decoration">
                                    <h1 class="h5 m-0"><?php echo get_the_title(); ?></h1>
                                </a>
                            </div>
                            <a href="<?php echo get_post_permalink(); ?>" alt="" class="p-0 p-sm-3">
                                <img src=<?php echo get_the_post_thumbnail_url(); ?> class="card-img-top frame-hover slumber" alt="">
                            </a>
                            <div class="card-body card-text">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="card-footer bg-vanilla">
                                <div class="d-flex justify-content-between">
                                    <a href="<?php echo get_post_permalink(); ?>" alt="" class="btn btn-vanilla rounded-0 hvr-underline-from-center">
                                        Learn more
                                    </a>
                                    <p class="text-chocolate m-0 align-self-center">
                                        <i class="far fa-clock"></i>
                                        <?php the_time('d/m/Y'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                <?php endwhile;
                else : endif; ?>

            </div>
        </div>
    </div>
</div>
</div>


<?php
    if($quote['display'] == "Yes") { ?>

        <hr class="divider w-50" />

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

            <blockquote class="h3 blockquote">
                <p class="m-0 text-green font-italic animated pulse infinite slow">
                    <?php echo $quote['content']; ?>
                </p>
                <footer class="blockquote-footer text-pink">
                    <?php echo $quote['author']; ?>
                </footer>
            </blockquote>

        </div>
<?php
    }
?>

<?php get_footer(); ?>