<?php

get_header(); ?>

<?php	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
	<article class="single-content">
		
<?php get_template_part('content'); 
		
		endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
			
			?>
			
			<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in

			<?php

			$categories = get_the_category();
			$separator = ", ";
			$output = '';

			if ($categories) {
				foreach ($categories as $category) {
					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
				}
				echo trim($output, $separator);
			}

			?>

			</p>
		</article>

<?php get_footer();

?>