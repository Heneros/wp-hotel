<?php

global $post;

$post_id = get_the_ID();
$header_mainPosts = get_field('show_main_post', $post_id);
$header_description = get_field('short_description_header', $post_id);


$selectedPostId = $header_mainPosts[0]->ID;
foreach($header_mainPosts  as $header_mainPost):
?>
<div class="wrapper">
<div class="container">
    <section id="hotels" class="other__offers">
        <h1>Other Packages</h1>
        <div class="container__offers">
            <?php
            $query = new WP_Query([
             'post_type' => 'post',
             'posts_per_page' => 4,
            ]);
   while($query->have_posts()):
    $query->the_post();
    $featured_img_url_box = get_the_post_thumbnail_url();
            ?>
 <div class="block__offer blue__haven">
     <div style="background-image:url(<?php 
           echo  $featured_img_url_box;
                 ?>);" class="img__blue-beach">
                </div>
                <div class="text">
                    <a href="#!" class="small__rating">
                        <div class="rate-yo">
                        </div> 
                      </a> <!---Rating-->
                      <h3><?php 
                      the_title();
                      ; ?></h3>
                      <ul class="prices__list-adaptive">
                        <li class=" price__old" >
                        <?php if(get_field('price_old')):?>
                     $     <?php echo the_field('price_old');?>
                     <?php endif;?>
                        </li>
                        <li class="price__new">
                        $<?php echo $header_mainPost->$pricePost['price_main'][0]; ?>
                        </li>
                    </ul>
                    <div class="text__beach">
                      <p class="paragr__haven">
                          <?php
                            the_content();
                          ?>
                      </p>
                      <span class="place">17349 Wheeler Ridge  Delaware</span>
                      <span class="guests"><?php echo the_field('guests');?>  x Guests</span>
                      <span class="room"><?php echo the_field('rooms');?> x Room</span>
                     <ul class="prices__list">
                         <li class="prices price__old" >
                             <?php if(get_field('price_old')):?>
                            $     <?php echo the_field('price_old');?>
                            <?php endif;?>
                         </li>
                         <li class="prices price__new">
                            $<?php echo $header_mainPost->$pricePost['price_main'][0]; ?>
                         </li>
                     </ul>
                    </div>
                     <button data-review-id="<?php echo  $header_mainPost->ID ?>"  class="review__btn">REVIEW</button>
                    </div>
            </div>
<?php 
endwhile;
endforeach;
?>
        </div>
    </section>
</div>  
</div>