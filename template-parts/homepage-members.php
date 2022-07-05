<section class="team-section bg-light">
    <div class="container">
        <div class="section-header d-lg-flex justify-content-lg-between align-items-lg-center mb-5">
            <h2><?php the_field("homepage_team_title") ?></h2>
            <a href="<?php the_field("homepage_team_link") ?>" class="team-more"><?php the_field("homepage_team_link_text") ?></a>

        </div>
        <!--.section-header-->
        <?php
        $arg = array(
            "post_per_page" => -1,
            "post_type" => "team_members",
            "order" => "ASC",
            "orderby" => "title"

        );
        $homepageTeam = new WP_Query($arg);

        if ($homepageTeam->have_posts()) {
        ?>
            <ul class="team-members-slider owl-carousel owl-theme list-unstyled">
                <?php
                while ($homepageTeam->have_posts()) {
                    $homepageTeam->the_post();
                ?>
                    <li class="team-member">
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-4 mb-sm-0">
                                <article class="team-member-content">
                                    <h5 class="team-member-name">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h5>
                                    <p class="team-member-info">
                                        <?php echo substr(get_the_content(), 0, 200); ?>...
                                    </p>
                                    <a href="<?php the_field("member_linkedin") ?>" class="fab fa-linkedin-in"></a>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6">
                                <a href="<?php the_permalink() ?>" class="d-block team-member-img">
                                    <?php the_post_thumbnail("team-list"); ?>
                                </a>
                            </div>
                        </div>
                    </li>

                <?php
                }
                ?>
            </ul>
        <?php
        } else {
        ?>
            <div class="jumbotron">
                <h3>There are no members to show</h3>
            </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <!--.container end-->
</section>