<?php get_header(); ?>
<main class="l-main">
	<div class="p-contact">
		<div class="p-contact__inner">
			<div class="p-contact__headline c-headline u-smooth">
				<h2 class="c-headline__title">CONTACT</h2>
				<p class="c-headline__subtitle">お問い合わせ</p>
			</div>
			<div class="p-contact__content u-smooth">
				<p>お問合せやご依頼はお気軽に下記フォームよりご連絡ください。</p>
				<div class="p-contact__form">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
