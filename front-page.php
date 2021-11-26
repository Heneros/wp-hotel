
<?php 

get_header();?>

    <div class="wrapper">
    <div class="container"> 
        <ul class="breadcrumbs">
            <li class=""><a href="#!">Home</a></li>
            <li class="breadcrumbs__item "><a href="#!">Flash Offers</a></li>
            <li class="breadcrumbs__item "><a href="#!">Grand Hilton Hotel</a></li>
        </ul> 
    </div>
</div>
<!---header__information-->


<?php
if(have_posts()):
 while(have_posts()) : the_post(); 
 global $post;

  $post_id = get_the_ID();
  $header_mainPosts = get_field('show_main_post', $post_id);
  $header_description = get_field('short_description_header', $post_id);


  $selectedPostId = $header_mainPosts[0]->ID;
  $featured_img_url = wp_get_attachment_url(get_post_thumbnail_id($selectedPostId));

  $pricePost =  get_field('price_main', $post_id);
  $phonePost = get_field('phone_main', $post_id);
  $roomPost = get_field('rooms',  $post_id);
  $guests = get_field('guests',  $post_id);
  $map = get_field('map',  $post_id);

  
  foreach($header_mainPosts  as $header_mainPost):
  ?>
<div class="wrapper">
    <div class="container">
        <div class="header__information">
            <a href="#!" class="rate">
                <div class="rate-yo-navbar">
                <?php echo do_shortcode('[ratemypost] ')?>
                </div>
              </a> 
              <!---Rating-->
                <div class="header__information-block">
                <h1 class="header__information-title"><?php echo $header_mainPost->post_title; ?></h1>
                <p class="header__information-desc">
                    <?php
            echo $header_mainPost->$header_description['short_description_header'][0];
                ?>
                 </p>
                <div class="user__rating-btn">
                User Rattings
                <div class="number__rating">
                    <?php echo do_shortcode('[ratemypost-result] ');?>
                </div> 
                  </div>
             </div>
        </div> <!---header__information-->
    </div>
    </div>

    <div class="wrapper">
      <div class="container">
        <section class="banner-section__information">
            <div class="container">
            <div class="banner-slider">
            <a href="#!" class="link__slider">
                <img src="<?php echo  $featured_img_url  ?>" alt="banner-img" class="banner__img">
              </a>
            </div>
          </div>
            <div class="container__banner-section">
                <div class="booking">
                    <div class="left__information">
                    <p class="price__text">
                        price starts as
                    </p>
                    <p class="price__num">
                        $ <?php echo $header_mainPost->$pricePost['price_main'][0]; ?>
                    </p>
                    <p class="price__text-second">
                        per room / night
                    </p>
                    <p  class="price__text-third">
                        Quick Booking
                    </p>
                </div>
                <div class="right__information">
                    <p class="booking__guest">
                   <?php echo $header_mainPost->$guests['guests'][0] ?> x Guests
                    </p>
                    <p class="booking__room">
                        <?php 
                        echo $header_mainPost->$roomPost['rooms'][0];
                        ?> x Room
                    </p>
                    <p class="booking__number">
                       <a href="tel: <?php echo $header_mainPost->$phonePost['phone_main'][0]; ?>"> <?php echo $header_mainPost->$phonePost['phone_main'][0]; ?></a>
                    </p>
                 </div>
                 <button  data-post-id="<?php echo  $header_mainPost->ID ?>" class="options__booking">View Other Options</button>
                </div>
                <iframe src="<?php
           echo $header_mainPost->$map['map'][0]
                ?>" width="353" height="193" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </div>
</div>
<?php

endforeach;
endwhile;
endif;
wp_reset_postdata()
?>
<div class="wrapper">
    <div class="container">
       <nav class="cards">
           <?php
        wp_nav_menu([
            'theme_location' => 'menu-body',
            'container'      => 'ul',
            'container_id'   => '',
            'menu_class'     => ''
        ]);
        ?>
       </nav>
    </div>  
</div>    
    <div class="wrapper">
    <div class="container">
 <section class="summary">
            <h1 class="title__summery"><?php echo the_field('package_summery_title')?></h1>
            <div class="container__inner">
                <div class="left__block">
                    <h2>Package Highlights</h2>
                    <ul>
                        <?php
                        if(have_rows('package_highlights')):
                        while(have_rows('package_highlights')):
                            the_row();
                        ?>
                        <li><?php  the_sub_field('package_highlights_text'); ?></li>
                        <?php
                        endwhile;
                        endif;
                        wp_reset_postdata()
                        ?>
                    </ul>
                </div>
                <div class="right__block">
                    <h2>Offer Details</h2>
                    <?php
                        if(have_rows('offer_details')):
                        while(have_rows('offer_details')):
                            the_row();
                        ?>
                          <p class="offer_details_text">
                          <?php  the_sub_field('offer_details_text'); ?>
                          </p>
                            <div class="date__detail">
                   <p>* Valid until    <?php  the_sub_field('offer_details_date_ends'); ?></p>
                   <div><?php  the_sub_field('offer_details_date'); ?> -  <?php  the_sub_field('offer_details_date_ends'); ?></div>
                   </div>
                   <?php
                        endwhile;
                        endif;
                        wp_reset_postdata()
                        ?>
                </div>
            </div>
</section>
</div>
</div> 
<div class="wrapper">
<div class="container">
    <section class="packages">
        <h2>Package Summery Details</h2>
        <div class="conainer__descriptions">
        <?php
                        if(have_rows('package_summery_details')):
                        while(have_rows('package_summery_details')):
                            the_row();
                            if( have_rows('group_text') ):              
                                while( have_rows('group_text') ):
                                           the_row(); 
                        ?>
        <div class="box__detail">
            <h3><?php the_sub_field('hotel_box_title'); ?></h3>
            <ul>
            <?php
       if( have_rows('group-list') ):  
                                while( have_rows('group-list') ):
                                           the_row();
                                           ?>
                <li><?php echo get_sub_field('list_hotel_box_items');?> </li>
                <?php
                  endwhile;
                endif;
                   ?>
            </ul>
        </div>
        <?php              
         endwhile;
         endif;
         endwhile;
         endif;
         wp_reset_postdata()
        ?>
    </div>
    </section>
</div>
</div>
<?php
// Slider Guests Sectio
get_template_part('theme-parts/other-packages');

// Slider Guests Sectio
get_template_part('theme-parts/slider-guests');
?>
    <div class="banner-newsletter" id="subscribe-us">
        <div class="layer">
            <div class="wrapper">
            <div class="container">
                <div class="content__newsletter">
                <div class="text__letter">
                    <span class="subscribe__letter">subscribe to our</span><br>
                    <span class="newsletter">
                        Newsletter
                    </span>
                </div>
                <form>
                    <input type="email" class="email__letter" name="" placeholder="Your email address" id="">
                    <button class="btn__email">Send</button>
                </form>
              </div>
            </div>   
            </div> 
        </div>
    </div>

    <section class="other-activities" id="activities">
     <div class="wrapper">
        <div class="container">
             <h1>Other Activities</h1>
             <div class="block__activity">
                 <div class="activity__card bar__card">
                     <div class="text__block-activity">
                     <h3>The curious corner 
                        of chamarel</h3>
                        <button class="book__now">Book Now</button>
                    </div>
                 </div>
                 <div class="activity__card gulf__card">
                     <div class="text__block-activity">
                        <h3>Gymkhana club golf
                            course</h3>
                           <button class="book__now">Book Now</button>
                       </div>
                 </div>
                 <div class="activity__card hiking__card">
                     <div class="text__block-activity">
                        <h3>Tamarind falls hiking
                            trip - full day
                            </h3>
                           <button class="book__now">Book Now</button>
                       </div>
                 </div>
                 <div class="activity__card marine__card">
                     <div class="text__block-activity">
                        <h3>The blue marine discovery
                            quest</h3>
                           <button class="book__now">Book Now</button>
                       </div>
                 </div>
             </div>
         </div>
        </div>
    </section>
    <footer>
        <div class="wrapper">
        <div class="container">
            <div class="container__footer-top">
                <div class="block__footer-top">
                    <div class="text__content-footer">
                 
                        <span>   Best </span> <br>
                        <span class="red__title"> tour</span>  <br>    
                           <span>plan</span> 
                       
                    </div>
                  
                </div>
                <div class="block__footer-top">
                    <span class="title__footer-top">ALL CATEGORIES
                    </span>
                    <ul>
                        <li>All Deals
                        </li>
                        <li>Hotels
                        </li>
                        <li>Activities
                        </li>
                        <li>Spa Packages
                        </li>
                        <li>Hotel Day Packages
                        </li>
                        <li>Restaurants</li>
                        <li>Fitness
                        </li>
                        <li>Rodrigues</li>
                    </ul>
                </div>
                <div class="block__footer-top">
                    <span class="title__footer-top">ADDITIONAL INFORMATION
                    </span>
                    <ul>
                        <li>About Us
                        </li>
                        <li>Contact Us
                        </li>
                        <li>How does it work?
                        </li>
                        <li>Frequently Asked Questions
                        </li>
                        <li>Deals.mu loyalty program
                        </li>
                        <li>Promote your Business on BTP</li>
                    </ul>
                    <div class="social__media-block">
                        <span class="title__footer-social">
                            Social Network
                        </span>
                        <a href="#!">
                            <img src="img/social-facebook.svg" alt="">
                        </a>
                        <a href="#!"><img src="img/social-youtube.svg" alt=""></a>
                        <a href="#!"><img src="img/social-instagram.svg" alt=""></a>
                    </div>

                </div>
                <div class="block__footer-top">
                    <span class="title__footer-top">LEGAL INFORMATION
                    </span>
                    <ul>
                        <li>Terms & Conditions
                        </li>
                        <li>Disclaimer
                        </li>
                        <li>Cancellation policy
                        </li>
                        <li>Privacy
                        </li>
                    </ul>
                </div>
            </div>
            <div class="block-footer__bottom">
                <div class="footer__container-bottom">
                     <div class="footer-contact__information">
                         <h2 class="title__contact-footer">Contact Details</h2>
                         <p>Feel free to contact us by phone, email or by our contact form</p> 

                         <div class="information__form">
                         <p 
                         class="contact__details-address">
                            9748 Blossom Hill Rd undefined Lansing, Idaho 68545 Italy
                         </p>
                         <p 
                         class="contact__details-phone">
                            Tel (business hours) : 
                           <a href="tel:34242">
                            269 1500 
                           </a> 
                            <br>
                            Tel (hotline) Monday - Saturday: 
                            <a href="tel:343242">
                                52-56-61-38 
                            </a> 
                                (08:00 am – 20:00 pm)<br>
                            Tel (hotline) Sunday: 
                            <a href="tel:343242">
                            52-56-61-38 
                        </a> 
                            (08:00 am – 14:00 pm)
                            
                         </p>
                         <p class="contact__details-email">
                             <a href="mailto:example@.com">
                                cherly.lawson@example.com
                             </a>
                         </p>
                        </div>
                     </div>
    <div id="contact-us" class="footer-contact__information">
        <h2 class="title__contact-form">
            Send us a message
        </h2>
        <form>
            <input type="text" class="name__form" placeholder="Your Full Name*" >
            <input type="phone" class="phone__form"  placeholder="Phone Number*">
            <textarea name="" placeholder="Message" id="" cols="56" rows="10"></textarea>
            <button class="form__btn">Send</button>

        </form>
        <span class="footer__required">* Required Fields</span>
                     </div>
                </div>
            </div>
            <div class="footer-information">
                <div 
                class="container__footer-information">
                    <ul>
                        <li><a href="#!">
                            Disclaimer  
                        </a>
                    </li>
                        <li><a href="#!">
                            Conditions of use
                        </a>
                    </li>
                        <li><a href="#!">
                            Cancellation policy
                        </a>
                    </li>
                    </ul>
    
                </div>
                <div class="payment-methods">
                    <a href="#!">
                        <img src="img/payment-methods.png" alt="payment-methods">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </footer>           
<?php get_template_part('theme-parts/modal-review'); ?>
<?php get_footer();?>