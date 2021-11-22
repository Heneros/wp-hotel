
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
							<input type="text" name="name" placeholder="Your Name" required>
							<textarea class="textarea__popup" name="review" placeholder="Your review" rows=2></textarea>
                            <button 
                            data-review-id="<?php echo  $post_id ?>" 
                            id="div"
                             class="button button-order">Send</button>
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