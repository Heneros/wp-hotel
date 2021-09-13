<?php 
global $post;
$page_id = $post->ID;
$images = get_field('slider_images', $post_id);?>
        <?php foreach( $images as $image_id ): ?>
            <img src="<?php
                echo $image_id;
                ?>" alt="">
        <?php endforeach; ?>



        <?php

       
                ?>
   <img src="<?php
              echo       get_field('testimage', $post_id);
                ?>" alt="">