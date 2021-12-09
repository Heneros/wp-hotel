<div class="wrapper">
<div class="container">
    <section class="guests__block wow fadeInUp" id="reviews">
        <h1>What people thinks about us</h1>
        <div class="slider-guests">
         <?php
            $query = new WP_Query([
                'post_type' => 'reviews',
                'posts_per_page' => -1
            ]);
            while($query->have_posts()):
                $query->the_post();
                $long = get_post_meta($post->ID, 'hotel_review_name',true);
                $review = get_post_meta($post->ID, 'hotel_review_comment', true);

                $status = get_field('status_order');
           if($status['value'] == 'done'):
            ?>
            <div class="slider__item">
                <img src="img/guest1.png" alt="guest">
                <span class="name__guest">
                    <?php
                 echo $long;
                  ?></span>
                <p class="date__stayed"><?php the_date('y-M-d')?></p>
                <a href="#!" class="rating">
                    <div class="rate-yo">
                    </div> 
                  </a> <!---Rating-->
                <p class="guest__review">
                    <?php
                    echo $review;
                   ?>
                </p>
            </div>
         <?php
         endif;
        endwhile;
        ?>
        </div>
    </section>
</div>
</div>