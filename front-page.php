<?php
get_header();
?>

<main>
    <?php
    get_template_part("./template-parts/lead-section");
    ?>

    <?php
    get_template_part("./template-parts/homepage-services")
    ?>

    <?php get_template_part("./template-parts/homepage-members") ?>

    <!--.team-section end-->

    <?php
    get_template_part("./template-parts/info-section")
    ?>

</main>
<!--main end-->

<?php
get_footer();
?>