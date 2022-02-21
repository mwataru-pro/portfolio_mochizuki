<?php get_header(); ?>
<main class="l-main">
	<div class="p-contact">
		<div class="p-contact__inner">
			<div class="c-headline">
				<h2 class="c-headline__title">CONTACT</h2>
				<p class="c-headline__subtitle">お問い合わせ</p>
			</div>
			<div class="p-contact__content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
