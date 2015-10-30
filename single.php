<?php  

get_header(); ?>

<div class="container">
	<div class="post-title">
		<h1><?php the_title(); ?></h1>
		<hr>
		<h3>Posted on <?php the_time("F jS, Y"); ?></h3>
	</div>
</div>
</div>
</header>
<!-- MAIN SECTION -->
<div class="container"> 

<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		<article class="post-summary">
			<p class="post-info">Written by <a href="<?php get_author_posts_url(get_the_author_meta("ID")); ?>"><?php the_author(); ?></a> | 
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
			<?php the_content(); ?>
		</article>
		<hr>
		<?php endwhile;

		else :
			echo "<p>No Content found</p>";

		endif;

	get_footer();

?>