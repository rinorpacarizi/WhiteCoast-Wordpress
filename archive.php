<?php
get_header();
?>
    
   
	
		<article class="content px-3 py-5 p-md-5">
	   
        <?php if( have_posts()) :while( have_posts()):the_post();?>
        <h3><?php the_title();?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>

        <?php endwhile; endif;?>

	    </article>
	   
    
    </div>
    
    
   <?php
    get_footer();  
   ?>   
	