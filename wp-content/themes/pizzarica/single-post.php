<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="text-center">
                    <div class="mb-4">
                        <i class="text-center text-uppercase m-0">
                            Blog post
                        </i>
                        <h1 class="display-4 title-green text-uppercase m-0"><?php the_title(); ?></h1>
                        <span class="h4 text-muted">
                            <i class="far fa-clock"></i>
                            <?php the_time('d/m/Y'); ?>
                        </span>
                    </div>
                    <div class="mb-4">
                        <a href="/bajozero/blog/" alt="" class="btn btn-vanilla rounded-0 hvr-underline-from-center">
                            <i class="far fa-arrow-alt-circle-left align-baseline"></i>
                            Go back to the blog page
                        </a>
                    </div>
                </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <div class="text-center blog-post-img-container mx-auto mb-3">
                <img src=<?php echo get_the_post_thumbnail_url(); ?> class="img-fluid frame slumber" alt="">
            </div>

            <div>
                <p class="font-weight-light font-size-big">
                    <?php echo get_the_content() ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 mx-auto">
            <p class="h1">
                - <?php echo get_the_author(); ?>
            </p>
        </div>
    </div>

<?php endwhile;
        else : endif; ?>
</div>
</div>

<?php get_footer(); ?>