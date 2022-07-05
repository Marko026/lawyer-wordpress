<?php
//Template name: Page with Sidebar
get_header();
?>

<main>
    <?php
    get_template_part('./template-parts/lead-section');
    ?>

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <section class="about-content">
                <div class="container">
                    <div class="row justify-content-sm-between">
                        <div class="col-12 col-md-8 ">
                            <figure class="mb-0 animation" data-animation="slide-right">
                                <img src="<?php the_field("page_side_image") ?>" alt="" />
                            </figure>
                            <article class="animation" data-animation="slide-left">
                                <?php the_content() ?>
                            </article>
                        </div>
                        <div class="col-12 col-md-4">
                            <aside>
                                <?php get_sidebar() ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>

    <?php
        }
    }

    ?>
    <?php
    //include-info-section
    get_template_part("./template-parts/info-section");

    ?>


    <!--.info end-->
</main>
<?php
get_footer();
?>