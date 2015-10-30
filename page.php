<?php  

get_header(); ?>

<div class="container">
	<div class="page-header">
		<h1><?php the_title(); ?></h1>
		<hr>
	</div>
</div>
</div>
</header>
<!-- MAIN SECTION -->
<div class="container"> 

<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		<article>
			<?php the_content(); ?>
		</article>
		<hr>
		<?php endwhile;

		else :
			echo "<p>No Content found</p>";

		endif;

	get_footer();	

?>