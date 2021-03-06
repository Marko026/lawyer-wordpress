<?php
if (have_posts()) {
?>
    <section class="news-section">
        <div class="container">
            <?php
            while (have_posts()) {
                the_post();
            ?>
                <article class="news-item mb-5 animation" data-animation="slide-top">
                    <div class="row justify-content-sm-between">
                        <div class="col-12 mb-4 col-md-7 mb-md-0 col-lg-6">
                            <div class="news-item-content">
                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="read-more text-uppercase text-primary">read more</a>

                            </div>
                        </div>
                        <!--.col left end-->

                        <div class="col-12 col-md-5">
                            <a class="d-block news-item-img" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail("news-01") ?>
                            </a>
                        </div>
                    </div>
                </article>
            <?php
            }
            ?>
        </div>
        <!--.container end-->
    <?php
} else {
    ?>
        <section class="news-section">
            <div class="container">
                <div class=jumbotron>
                    <h3>The are no post to show</h3>
                </div>

            </div>
            <!--.container end-->
        </section>
    <?php
}

    ?>
    <!--.news-section end-->