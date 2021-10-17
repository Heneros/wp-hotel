

<div class="popup-up" data-modal>
		<div class="popup-dialog">
			<div class="popup-content">
				<button class="popup-close">&times;</button>
				<form 
                method="POST"
                action="<?php echo esc_url(admin_url('admin-post.php'));  ?>"
             >
					<h4>Booking Now</h4>
					<div class="main-form">
						<div class="form">
							<input type="text" name="name" placeholder="Your Name" required>
							<input type="text" name="phone" placeholder="Your Phone number" required>
							<input type="text" name="email" placeholder="Your email">
							<textarea class="textarea__popup" name="message" placeholder="Your comment" rows=2></textarea>
                            <button class="button button-order">Send</button>
                            <input type="hidden" name="action" value="hotel-modal-form">
							
                        
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>

    
    <a href="#up" class="pageup">
		<svg class="up" viewBox="0 0 26 26" fill="black" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M26 0H0V26H26V0ZM4.6593 17.7519L13.1233 10.33L21.5873 17.7519L22.9059 16.2481L13.7826 8.24813L13.1233 7.67L12.464 8.24813L3.3407 16.2481L4.6593 17.7519Z" fill="black"/>
		</svg>
	</a>

    
</body>
</html>
<?php wp_footer(); ?> 