<?php
get_header()
?>
    <?php while (have_posts()) : the_post(); ?>
    <?php
   echo  do_shortcode('[easy_image_gallery gallery="838"]');
     ?>
     <?php

            get_template_part('theme-parts/slider-home-page');
        ?>
        <?php endwhile?>
<?php
get_footer();
?>
