
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

<div class="popup" <?php echo $post_id?> id="popup"> 
          <div class="popup-inner">
            <div class="popup__photo">
              <img src="<?php 

                 ?>" alt="">
            </div>
            <div class="popup__text">
              <h1>Leave Review</h1>
			  <form 
                method="POST"
                action="<?php echo esc_url(admin_url('admin-post.php'));  ?>"
             >
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
            <a class="popup__close" href="#close">X</a>
          </div>
        </div>
	

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
    
    <a href="#up" class="pageup">
		<svg class="up" viewBox="0 0 26 26" fill="black" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M26 0H0V26H26V0ZM4.6593 17.7519L13.1233 10.33L21.5873 17.7519L22.9059 16.2481L13.7826 8.24813L13.1233 7.67L12.464 8.24813L3.3407 16.2481L4.6593 17.7519Z" fill="black"/>
		</svg>
	</a>

    
</body>
</html>
<?php wp_footer(); ?> 