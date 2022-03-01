<?php get_header(); ?>
<div class="p-contact">
	<div class="p-contact__inner">
		<div class="p-contact__headline c-headline">
			<h2 class="c-headline__title">CONTACT</h2>
			<p class="c-headline__subtitle">お問い合わせ</p>
		</div>
		<div class="p-contact__content">
			<p>以下の無用でよろしければ<span class="u-font-bold">送信</span>を押してください。</p>
			<div class="p-contact__confirm">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
