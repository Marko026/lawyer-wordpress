<footer class="bg-white">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4">
                <?php dynamic_sidebar("footer_1"); ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar("footer_2") ?>
            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar("footer_3") ?>
            </div>
        </div>
    </div>

    <div class="container text-center d-sm-flex justify-content-sm-between align-items-sm-center">

        <?php
        $menuLocations = get_nav_menu_locations();
        $socialMenuID = $menuLocations['social-menu'];
        $socialMenuItems = wp_get_nav_menu_items($socialMenuID);

        if ($socialMenuItems) {
            ?>
            <nav class="social mb-4 mb-sm-0 order-sm-last">
                <?php

                    foreach ($socialMenuItems as $socialItem) {

                        if ($socialItem->menu_item_parent == 0) {
                            ?>
                        <a href="<?php echo $socialItem->url ?>" class="fab fa-<?php echo strtolower($socialItem->title);
                                                                                            if ($socialItem->title == "Facebook") {
                                                                                                echo "-f";
                                                                                            }
                                                                                            ?> text-decoration-none"></a>
                <?php
                        }
                    }
                    ?>
            </nav>
        <?php
        }
        ?>


        <p class="copyright mb-0">Copyright &copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" class="text-decoration-none"><?php bloginfo("name") ?></a></p>
    </div>
</footer>
<!--footer end-->

<?php
//Include default wordpress js files
wp_footer();
?>
</body>

</html>