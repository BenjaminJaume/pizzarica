<?php

/**
 Template Name: Flavors
 */

$top_pictures = get_field('top_pictures');

$flavors = get_field('flavors');
$toppings = get_field('toppings');
$sauces = get_field('sauces');

$price_ice_cream = get_field('price_ice_cream');
$price_toppings = get_field('price_toppings');
$price_sauces = get_field('price_sauces');

$quote = get_field('quote');

?>

<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-3 title-green text-center text-uppercase animated slow fadeInDown">
            Flavors
        </h1>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-flavor" tabindex="-1" role="dialog" aria-labelledby="modal-flavor-label">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-header bg-green text-chocolate">
                <h4 class="modal-title mx-auto text-uppercase" id="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body bg-vanilla">
                <span id="modal-picture"></span>
                <br />
                <span id="modal-content"></span>
            </div>

            <div class="modal-footer bg-green">
                <button type="button" class="btn btn-vanilla rounded-0 hvr-underline-from-center" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0" data-aos="fade-right" data-aos-once="true">
            <div class="img-text-container mb-3">
                <?php 
                    if($top_pictures['flavors_picture']['ID']) {
                        echo wp_get_attachment_image($top_pictures['flavors_picture']['ID'], '', false, 'class=img-flavors-page img-fluid frame bg-0-50');
                    } else {
                        echo wp_get_attachment_image($top_pictures['flavors_picture'], '', false, 'class=img-flavors-page img-fluid frame bg-0-50');
                    }
                ?>
                <h1 class="centered text-vanilla bg-text-1 m-0">
                    <span>
                        Flavors
                    </span>
                </h1>
            </div>

            <div>
                <dl class="font-size-big font-weight-light">

                        <?php
                            foreach ($flavors as $flavor) {
                                if($flavor['picture']['ID']) {
                                    $id = $flavor['picture']['ID'];
                                } else {
                                    $id = $flavor['picture'];
                                }

                                if($flavor['vegan_option'] == "Yes") {
                                    $v = '<i class=\'text-muted font-italic\'> (v)</i>';
                                } else {
                                    $v = '';
                                }

                                ?>
                                <dd class="flavor-item item-text-chocolate">
                                    <span
                                        data-toggle="modal"
                                        data-target="#modal-flavor"
                                        data-picture="
                                            <img class='img-fluid rounded slumber frame' src=<?php echo wp_get_attachment_image_src($id, '', false)[0]; ?> />
                                        "
                                        data-title="<?php echo $flavor['name'] . ' ' . $v; ?>"
                                        class="text-capitalize"
                                    >
                                        <?php echo $flavor['name']; ?>
                                    </span>
                                    <?php echo $v; ?>
                                </dd>
                                <?php
                            }
                        ?>

                </dl>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0" data-aos="fade-down" data-aos-once="true">
            <div class="img-text-container mb-3">
                <?php echo wp_get_attachment_image(36, '', false, 'class=img-flavors-page img-fluid frame bg-0-50') ?>
                <?php 
                    if($top_pictures['toppings_picture']['ID']) {
                        echo wp_get_attachment_image($top_pictures['toppings_picture']['ID'], '', false, 'class=img-flavors-page img-fluid frame bg-0-50');
                    } else {
                        echo wp_get_attachment_image($top_pictures['toppings_picture'], '', false, 'class=img-flavors-page img-fluid frame bg-0-50');
                    }
                ?>
                <h1 class="centered text-vanilla bg-text-2 m-0">
                    <span>
                        Toppings
                    </span>
                </h1>
            </div>

            <div>
                <dl class="font-size-big font-weight-light">

                    <?php
                        foreach ($toppings as $topping) {
                            if($topping['picture']['ID']) {
                                $id = $topping['picture']['ID'];
                            } else {
                                $id = $topping['picture'];
                            }

                            if($topping['vegan_option'] == "Yes") {
                                $v = '<i class=\'text-muted font-italic\'> (v)</i>';
                            } else {
                                $v = '';
                            }

                            ?>
                            <dd class="flavor-item item-text-green">
                                <span
                                    data-toggle="modal"
                                    data-target="#modal-flavor"
                                    data-picture="
                                        <img class='img-fluid rounded slumber frame' src=<?php echo wp_get_attachment_image_src($id, '', false)[0]; ?> />
                                    "
                                    data-title="<?php echo $topping['name'] . ' ' . $v; ?>"
                                    class="text-capitalize"
                                >
                                    <?php echo $topping['name']; ?>
                                </span>
                                <?php echo $v; ?>
                            </dd>
                            <?php
                        }
                    ?>

                </dl>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center mx-sm-auto mb-5 mb-md-0" data-aos="fade-left" data-aos-once="true">

            <div class="img-text-container mb-3">
                <?php echo wp_get_attachment_image(37, '', false, 'class=img-flavors-page img-fluid frame bg-0-50') ?>
                <?php 
                    if($top_pictures['sauces_picture']['ID']) {
                        echo wp_get_attachment_image($top_pictures['sauces_picture']['ID'], '', false, 'class=img-flavors-page img-fluid frame bg-0-50');
                    } else {
                        echo wp_get_attachment_image($top_pictures['sauces_picture'], '', false, 'class=img-flavors-page img-fluid frame bg-0-50');
                    }
                ?>
                <h1 class="centered text-vanilla bg-text-3 m-0">
                    <span>
                        Sauce
                    </span>
                </h1>
            </div>


            <div>
                <dl class="font-size-big font-weight-light">


                    <?php
                        foreach ($sauces as $sauce) {
                            if($sauce['picture']['ID']) {
                                $id = $sauce['picture']['ID'];
                            } else {
                                $id = $sauce['picture'];
                            }

                            if($sauce['vegan_option'] == "Yes") {
                                $v = '<i class=\'text-muted font-italic\'> (v)</i>';
                            } else {
                                $v = '';
                            }

                            ?>
                            <dd class="flavor-item item-text-pink">
                                <span
                                    data-toggle="modal"
                                    data-target="#modal-flavor"
                                    data-picture="
                                        <img class='img-fluid rounded slumber frame' src=<?php echo wp_get_attachment_image_src($id, '', false)[0]; ?> />
                                    "
                                    data-title="<?php echo $sauce['name'] . ' ' . $v; ?>"
                                    class="text-capitalize"
                                >
                                    <?php echo $sauce['name']; ?>
                                </span>
                                <?php echo $v; ?>
                            </dd>
                            <?php
                        }
                    ?>

                </dl>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12 pt-3">
            <p class="text-muted font-italic text-center m-0">
                (v) Vegan option available
            </p>
        </div>
    </div>
</div>

<div class="container-fluid bg-vanilla my-5" data-aos="fade-down" data-aos-once="true">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 mx-auto">
            <h1 class="title-green display-4 text-center text-uppercase">
                Prices
            </h1>

            <div class="card-deck card-deck-flavors-page justify-content-center mb-3 text-center">
                <div class="card rounded-0 mb-4 shadow-sm">
                    <div class="card-header bg-chocolate text-vanilla">
                        <h4 class="my-0 font-weight-light">#1 Ice cream only 👍</h4>
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <h5 class="text-chocolate mb-3">You can chose up to 3 different flavors</h5>

                            <dl class="list-unstyled">
                                <dd>
                                    <span class="font-size-big">
                                        1 flavor: &#8353;<?php echo $price_ice_cream['1_flavor']['colones']; ?>
                                    </span>
                                    <span class="text-muted">
                                        (&#36;<?php echo $price_ice_cream['1_flavor']['dollars']; ?>)
                                    </span>
                                </dd>
                                <dd>
                                    <span class="font-size-big">
                                        2 flavors: &#8353;<?php echo $price_ice_cream['2_flavors']['colones']; ?>
                                    </span>
                                    <span class="text-muted">
                                        (&#36;<?php echo $price_ice_cream['2_flavors']['dollars']; ?>)
                                    </span>
                                </dd>
                                <dd>
                                    <span class="font-size-big">
                                        3 flavors: &#8353;<?php echo $price_ice_cream['3_flavors']['colones']; ?>
                                    </span>
                                    <span class="text-muted">
                                        (&#36;<?php echo $price_ice_cream['3_flavors']['dollars']; ?>)
                                    </span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 mb-4 shadow-sm">
                    <div class="card-header bg-green text-vanilla">
                        <h4 class="my-0 font-weight-light">#2 Ice cream + topping 👌</h4>
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <h5 class="text-green mb-3">Pick your favorite flavors and add up to 2 toppings</h5>

                            <dl class="list-unstyled">
                                <dd>
                                    <span class="font-size-big">
                                        1 topping: + &#8353;<?php echo $price_toppings['1_topping']['colones']; ?>
                                    </span>
                                    <span class="text-muted">
                                        (&#36;<?php echo $price_toppings['1_topping']['dollars']; ?>)
                                    </span>
                                </dd>
                                <dd>
                                    <span class="font-size-big">
                                        2 toppings: + &#8353;<?php echo $price_toppings['2_toppings']['colones']; ?>
                                    </span>
                                    <span class="text-muted">
                                        (&#36;<?php echo $price_toppings['2_toppings']['dollars']; ?>)
                                    </span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 mb-4 shadow-sm">
                    <div class="card-header bg-pink text-vanilla">
                        <h4 class="my-0 font-weight-light">#3 Combo 🤩</h4>
                    </div>
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <h5 class="text-pink mb-3">If you're really hungry, just put some extra sauce on it!</h5>

                            <dl class="list-unstyled">
                                <dd>
                                    <span class="font-size-big">
                                        Any sauce: + &#8353;<?php echo $price_sauces['1_sauce']['colones']; ?>
                                    </span>
                                    <span class="text-muted">
                                        (&#36;<?php echo $price_sauces['1_sauce']['dollars']; ?>)
                                    </span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center font-italic text-muted">
                <?php 
                    $total_colones =
                        $price_ice_cream['3_flavors']['colones'] +
                        $price_toppings['2_toppings']['colones'] +
                        $price_sauces['1_sauce']['colones']
                    ;
                    $total_dollars =
                        $price_ice_cream['3_flavors']['dollars'] +
                        $price_toppings['2_toppings']['dollars'] +
                        $price_sauces['1_sauce']['dollars']
                    ;
                ?>
                Price range: &#8353;<?php echo $price_ice_cream['1_flavor']['colones']; ?> to &#8353;<?php echo $total_colones; ?> (&#36;<?php echo $price_ice_cream['1_flavor']['dollars']; ?> to &#36;<?php echo $total_dollars; ?>)
            </p>

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
    } else { ?>
        <hr class="divider w-50 my-5 py-5" />
    <?php 
    }
?>

<?php get_footer(); ?>