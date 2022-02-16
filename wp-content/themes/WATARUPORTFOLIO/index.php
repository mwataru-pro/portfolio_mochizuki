<?php
/**
 * This is index page
 *
 * @package portfolio_mochizuki
 */

get_header();
?>
<div id="first-view" class="p-first-view">
	<div class="p-first-view__inner">
		<h2 class="p-first-view__title">WATARU PORTFOLIO</h2>
		<p class="p-first-view__image">
			<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/first-view1.png')); ?>" alt="man illust">
		</p>
		<div class="c-fluid"></div>
	</div>
</div>
<?php get_footer(); ?>
