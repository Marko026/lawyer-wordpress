<?php

get_header();

?>
<main>
    <?php
    get_template_part('./template-parts/lead-section');
    ?>

    <?php
    get_template_part('./template-parts/post-loop') ?>

    <?php
    get_template_part("./template-parts/info-section")
    ?>
    <!--.info end-->

</main>

<?php
get_footer();
?>