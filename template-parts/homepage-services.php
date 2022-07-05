<section class="service-section">
    <div class="container">
        <h2 class="text-center"><?php the_field("homepage_services_title") ?></h2>
        <?php
        $arg = array(
            "post_per_page" => -1,
            "post_type" => "our_services",
            "order" => "ASC",
            "orderby" => "date"

        );

        $homepageServices = new WP_Query($arg);

        if ($homepageServices->have_posts()) {
        ?>
            <div class="row justify-content-center">
                <?php
                while ($homepageServices->have_posts()) {
                    $homepageServices->the_post();
                ?>
                    <div class="col-12 col-md-6 col-lg-5">
                        <article class="service-item animation" data-animation="slide-top">
                            <a href="<?php the_permalink(); ?>" class="d-flex align-items-center">
                                <figure class="mb-0">
                                    <img src="<?php the_field('service_icon') ?>" alt="" />
                                </figure>
                                <span class="text-uppercase h6 pl-4"><?php the_title(); ?></span>
                            </a>
                        </article>
                        <!--.service-item end-->
                    </div>

                <?php
                }

                ?>
            </div>
        <?php
        } else {
        ?>
            <div class="jumbotron">
                <h3>There is no services to show</h3>
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