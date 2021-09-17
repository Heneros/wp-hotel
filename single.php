<?php
get_header()
?>
    <?php while (have_posts()) : the_post(); ?>

     <?php

            // get_template_part('theme-parts/slider-home-page');
        ?>
        <img src="<?php
        echo the_field('image_main');
        ?>" alt="">
<?php 

?>

        <?php endwhile?>
<?php
get_footer();
?>
