</div>
<!-- FOOTER -->
<footer class="text-center">
	<!-- FOOTER WIDGETS -->
	<div class="footer-widgets">
			<div class="col-sm-3 footer-widget-area">
				<?php dynamic_sidebar('footer1'); ?>
			</div>

			<div class="col-sm-3 footer-widget-area">
				<?php dynamic_sidebar('footer2'); ?>
			</div>

			<div class="col-sm-3 footer-widget-area">
				<?php dynamic_sidebar('footer3'); ?>
			</div>

			<div class="col-sm-3 footer-widget-area">
				<?php dynamic_sidebar('footer4'); ?>
			</div>
	</div>
	<div class="col-sm-12">
		<p><?php bloginfo("name"); ?> - &copy; <?php echo Date("Y"); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>

<!-- online version of jQuery-->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>