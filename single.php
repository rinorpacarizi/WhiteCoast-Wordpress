<?php get_header();?>
    
		
<article class="content px-3 py-5 p-md-5">
	
	<?php if(has_post_thumbnail()):?>
		
		<img src="<?php the_post_thumbnail_url("largest"); class="img-fluid" ?>">
	<?php endif;?>


	   <?php if( have_posts()) :while( have_posts()){the_post(); the_content();}?>
	   
	   <?php endwhile; endif;?>

	   </article>
	  
   
   </div>
	
    </div>    
<?php get_footer();?>   