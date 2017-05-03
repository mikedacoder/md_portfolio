<?php

get_header();

if(have_posts()) :
?>

	<h3 class="archive-header"><?php 
		if(is_category()) {
			single_cat_title();
		} elseif (is_tag()) {
			single_tag_title();
		} elseif (is_author()) {
			the_post();
			echo 'Posts by ' . get_the_author();
			rewind_posts();
		} elseif (is_day()) {
			echo 'Posts made on ' . get_the_date();
		} elseif (is_month()) {
			echo 'Posts made during ' . get_the_date('F Y');
		} elseif (is_year()) {
			echo 'Posts made during  ' . get_the_date('Y');
		} else {
			echo 'Archives: ';
		}
	?></h3>

<?php
	while(have_posts()) : the_post(); ?>

	<article class="column">						
		<section class="blog-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('landscape-small-thumbnail'); ?></a></p>					 
			<?php the_excerpt(); ?>					
		</section>			
	</article>	

<?php endwhile; ?>
		
	<div class="pagination"><?php echo paginate_links(); ?></div>		

<?php else:
		echo '<p>No content found</p>';

endif;
			 
get_footer();

?>