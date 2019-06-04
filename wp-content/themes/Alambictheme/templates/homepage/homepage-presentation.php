<?php
   if ( have_posts() ){
   	while ( have_posts() ) {
   		the_post();
   		?>
   		   <div class="row">
               <div class="homepage-presentation">
                  <div class="columns large-9">
                     <?php the_content(); ?>
                  </div>
                  <div class="columns large-3">
                     <?php the_post_thumbnail('medium'); ?>
                  </div>
               </div>
            </div>
   		<?php
   	}
   }
