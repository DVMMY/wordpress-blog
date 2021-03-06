<article class="post-summary">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="post-info">Posted by <a href="<?php get_author_posts_url(get_the_author_meta("ID")); ?>"><?php the_author(); ?></a> on <?php the_time("F jS, Y"); ?> | 
		<?php  
		$categories = get_the_category();
		$separator = ", ";
		$output = "";
		if ($categories) {
			foreach ($categories as $category) {
				$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
			}
			echo trim($output, $separator); 
		}
		?>
	</p>
	<?php if ( is_archive() || is_search() ) { ?>
		<p>	
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
		</p> 
	<?php } else { 
		the_content("Continue reading &raquo;"); 
	 } ?>
</article>