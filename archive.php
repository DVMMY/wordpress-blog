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
		?>

		<h2><?php 

			if (is_category()) {
				single_cat_title();
			} elseif (is_tag()) {
				single_tag_title();
			} elseif (is_author()) {
				the_post();
				echo "Author Archives: " . get_the_author();
				rewind_posts();
			} elseif (is_day()) {
				echo "Daily Archives: " . get_the_date();
			} elseif (is_month()) {
				echo "Monthly Archives: " . get_the_date("F Y");
			} elseif (is_year()) {
				echo "Yearly Archives: " . get_the_date("Y");
			} else {
				echo "Archives:";
			}

		?></h2>

		<?php
		while (have_posts()) : the_post();

		get_template_part("content", get_post_format()); ?>
		
		<hr>
		<?php endwhile;

		else :
			echo "<p>No Content found</p>";

		endif;

	get_footer();

?>