<?php  

get_header(); ?>

<div class="container">
	<div class="header-text">
		<h1><?php bloginfo("name"); ?></h1>
		<hr>
		<h3><?php bloginfo("description"); ?></h3>
	</div>
</div>
</div>
</header>
<!-- MAIN SECTION -->
<div class="container"> 

<?php
	if (have_posts()) :
		while (have_posts()) : the_post(); 
		
		get_template_part("content", get_post_format()); ?>

		<hr>
		<?php endwhile;

		else :
			echo "<p>No Content found</p>";

		endif;

	get_footer();

?>