<?php
// Template Name: Page for Team
get_header();
?>
<main>
    <?php get_template_part("./template-parts/lead-section") ?>
    <section class="team-members">
        <div class="container">
            <?php
            if (have_posts()) {
                the_post();
                the_content();
            }
            ?>
            <?php
            $arg = [
                "posts_per_page" => -1,
                "post_type" => "team_members",
                "order" => "ASC",
                "orderby" => "title",
            ];
            $members = new WP_Query($arg);

            if ($members->have_posts()) {
            ?>
                <div class="row">
                    <?php
                    while ($members->have_posts()) {
                        $members->the_post();
                    ?>
                        <div class="col-12 col-xm-6 col-md-4 col-lg-3 mb-4">
                            <article class="team-member">
                                <figure class="position-relative">
                                    <a href="<?php the_permalink(); ?>" class="d-block">
                                        <?php the_post_thumbnail("team-list") ?>
                                    </a>
                                    <a href="<?php the_field("member-linkedin") ?>" class="fab fa-linkedin-in"></a>
                                </figure>
                                <h5>
                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                </h5>
                                <p class="team-member-position"><?php the_field("members") ?></p>
                            </article>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            } else {
            ?>
                <div class="jumbotron">
                    <h2>There is no team members</h2>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
            <?php
            get_template_part("./template-parts/info-section");
            ?>
</main>
<?php
get_footer();
?>