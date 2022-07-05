<?php

//Template Name: Services page


get_header();
?>

<main>

    <?php
    get_template_part('./template-parts/lead-section')
    ?>

    <section class="service-section dark-service-section">
        <div class="container">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
            <?php
            $arg = array(
                "posts_per_page" => -1,
                "post_type" => "our_services",
                "order" => "ASC",
                "orderby" => "date"

            );

            $services = new WP_Query($arg);
            if ($services->have_posts()) {
            ?>
                <div class="row justify-content-center">
                    <?php
                    while ($services->have_posts()) {
                        $services->the_post();
                    ?>
                        <div class="col-12 col-md-6 col-lg-5">
                            <article class="service-item animation" data-animation="slide-top">
                                <a href="<?php the_permalink(); ?>" class="d-flex align-items-center mb-5">
                                    <figure class="mb-0">
                                        <img src="<?php the_field("service_icon") ?>" alt="" />
                                    </figure>
                                    <span class="text-uppercase h6 pl-4 text-white"><?php the_title() ?></span>
                                </a>
                                <p class="service-item-description text-white pr-4">
                                    <?php the_field("service_description") ?>
                                </p>
                                <a class="read-more text-primary text-uppercase" href="<?php the_permalink() ?>">read more</a>
                            </article>
                            <!--.service-item end-->
                        </div>


                    <?php
                    }
                    ?>
                </div>
            <?php
            }


            wp_reset_postdata();
            ?>
            <!--.row end-->
        </div>
        <!--.container end-->
    </section>
    <!--.service-section end-->

</main>

<?php

get_footer();
?>