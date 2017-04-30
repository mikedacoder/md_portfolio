<?php
	get_header(); ?>
	
<p>Hi! Thanks for visiting my Web Developer portfolio site. See examples of projects I have worked on below.</p>

<?php	if (have_posts()) :		
		while (have_posts()) : the_post(); ?>
		
			<article class="column">						
				<section class="blog-content">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('landscape-small-thumbnail'); ?></a></p>					 
					<?php the_excerpt(); ?>					
				</section>			
			</article>								

<?php		endwhile;
	else :
		echo '<p>No Content found</p>';
	endif; 

	get_footer();
?>