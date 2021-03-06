
   <footer>
        <div class="wrapper">
        <div class="container">
            <div class="container__footer-top">
                <div class="block__footer-top  wow fadeInUp">
                    <div class="text__content-footer">
                        <span>   Best </span> <br>
                        <span class="red__title"> tour</span>  <br>    
                           <span>plan</span> 
                    </div>
                </div>
                <div class="block__footer-top  wow fadeInUp">
                    <span class="title__footer-top">ALL CATEGORIES
                    </span>
                    <ul>
						<?php 
						$categories = get_categories();
						foreach($categories as $category){
							echo '<li>' . $category->name . '</li>';
						}
						?>
                    </ul>
                </div>
                <div class="block__footer-top  wow fadeInUp">
                    <span class="title__footer-top">ADDITIONAL INFORMATION
                    </span>
                   <?php
				    wp_nav_menu([
						'theme_location' => 'menu-footer'
					])
				   ?>
                    <div class="social__media-block ">
                        <span class="title__footer-social">
                            Social Network
                        </span>
                        <div class="ya-share2 social-share" data-curtain data-shape="round" data-lang="en" data-services="facebook,whatsapp"></div>
                        <!-- <a href="#!">
                            <img src="img/social-facebook.svg" alt="">
                        </a>
                        <a href="#!"><img src="img/social-youtube.svg" alt=""></a>
                        <a href="#!"><img src="img/social-instagram.svg" alt=""></a> -->
                    </div>

                </div>
                <div class="block__footer-top  wow fadeInUp">
				<?php
				  if( have_rows('menu_footer') ):              
					while( have_rows('menu_footer') ):
							   the_row(); 
					
										   ?>
										   <span class="title__footer-top">
             <?php  
			  the_sub_field('menu_footer_title'); 
			  if( have_rows('menu_footer_list') ):              
				while( have_rows('menu_footer_list') ):
						   the_row();  
			  ?> 
                    </span>
                    <ul>
                        <li><?php
						the_sub_field('footer_menu_item');
						?>
                        </li>
                    </ul>
					<?php
						endwhile;
					endif;
					endwhile;
					endif;

					?>

                </div>
            </div>
            <div class="block-footer__bottom  wow fadeInUp">
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
                                (08:00 am ??? 20:00 pm)<br>
                            Tel (hotline) Sunday: 
                            <a href="tel:343242">
                            52-56-61-38 
                        </a> 
                            (08:00 am ??? 14:00 pm)
                            
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
<div class="popup-up" >
		<div class="popup-dialog">
			<div class="popup-content">
				<button class="popup-close">&times;</button>
				<form 
                method="POST"
                action="<?php echo esc_url(admin_url('admin-post.php'));  ?>"
             >
					<h4>Booking Now</h4>
					<div class="main-form">
						<div class="form" id="">
							<input type="text" name="name" placeholder="Your Name" required>
							<input type="text" name="phone" placeholder="Your Phone number" required>
							<input type="text" name="email" placeholder="Your email">
							<textarea class="textarea__popup" name="message" placeholder="Your comment" rows=2></textarea>
                            <button id="div" class="button button-order">Send</button>
                            <input type="hidden" name="action" value="hotel-modal-form">
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- <div class="popup-review" >
		<div class="popup-dialog">
			<div class="popup-content">
				<button class="popup-close-review">&times;</button>
				<form 
                method="POST"
                action="<?php echo esc_url(admin_url('admin-post.php'));  ?>"
             >
					<h4>Leave Review</h4>
					<div class="main-form">
						<div class="form" id="">
							<input type="text" name="name" placeholder="Your Name" required>
							<textarea class="textarea__popup" name="review" placeholder="Your review" rows=2></textarea>
                            <button id="div" class="button button-order">Send</button>
                            <input type="hidden" name="action" value="hotel-modal-review">
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div> -->



 <!-- <div class="popup-email">
	 <div class="popup-body">
		 <div class="popup-content-email">
		 <div class="image__bg">
		 <img src="<?php echo get_template_directory_uri()?>/assets/img/email-bg.jpg" width="350" height="450" alt="">
		 </div>
		 <div class="text__content">
		 <button class="popup-close__email">&times;</button>
		 <H1 class="logo navbar__element" >
            BEST
             <span>TOUR</span>  
              PLAN
            </H1>
			<h3>Basic selectors are fundamental selectors; these are the most basic selectors that are frequently</h3>
			
		 <form action="POST">
				 <input type="email" name="email" placeholder="Enter Email"><br>
				 <button type="submit" class="send__email">Send</button>
			 </form>
		 </div>
		 </div>
	 </div>
 </div> -->
    
<?php

$first_query = new WP_Query(array(
'post_type' => 'post',
'posts_per_page'  =>  -1
));
  
$post_id = get_the_ID();
if ( $first_query->have_posts() ) {
    while ( $first_query->have_posts() ) {
		$i = 0;
          $first_query->the_post();
?>
<div class="popup"  id="popup-<?php echo get_the_ID() ?>"> 
          <div class="popup-inner">
            <div class="popup__photo">
          <?php 
			echo the_post_thumbnail();
                 ?>
            </div>
            <div class="popup__text">
              <h1>Leave Review</h1>
			  <form 
                method="POST"
                action="<?php echo esc_url(admin_url('admin-post.php'));  ?>">
					<div class="main-form">
						<div class="form" <?php echo $i; ?> id="">
            <div class="name__review">
            <input type="text" name="name" placeholder="Your Name" required>
            <label for="name" class="txt">
            <i class="fas fa-user"></i>


          </label>
            </div>
              <div class="textarea__review">
              <textarea class="textarea__review" name="review" placeholder="Your review" rows=2></textarea>
              <label for="review" class="txt">
              <i class="fa fa-comment" aria-hidden="true"></i>  
          </label>
              </div>
	
              <button 
                            data-review-id="<?php echo  $post_id ?>" 
                            id="div"
                             class="button button-review">
                             <i class="fa fa-paper-plane" aria-hidden="true"></i>
                             Send</button>
                            <input type="hidden" name="action" value="hotel-modal-review">
                        </div>
					</div>
				</form>
            </div>
            <a class="popup__close" href="#close">X</a>
          </div>
        </div> 
<?php
        $i++; 
}
} 
wp_reset_postdata();
 
?>
    <a href="#up" class="pageup">
		<svg class="up" viewBox="0 0 26 26" fill="black" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M26 0H0V26H26V0ZM4.6593 17.7519L13.1233 10.33L21.5873 17.7519L22.9059 16.2481L13.7826 8.24813L13.1233 7.67L12.464 8.24813L3.3407 16.2481L4.6593 17.7519Z" fill="black"/>
		</svg>
	</a>

    
</body>
</html>
<script src="https://yastatic.net/share2/share.js"></script>
<?php wp_footer(); ?> 