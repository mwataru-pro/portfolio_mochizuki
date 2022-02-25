<?php get_header(); ?>
<div class="p-production">
	<div class="p-production__inner">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
		<div class="p-production__title-wrap c-headline u-smooth-trigger">
			<h2 class="p-production__title c-headline__title">
				<?php the_title(); ?>
			</h2>
			<p class="p-production__subtitle c-headline__subtitle">
				<a href="<?php echo get_post_type_archive_link( 'work' ); ?>">
					WORKS
				</a>
			</p>
		</div>
		<div class="p-production__thumbnail u-smooth-trigger">
			<?php $work_thumbnail = get_field('work-thumbnail');
			if($work_thumbnail){ ?>
			<img
				src="<?php echo esc_url($work_thumbnail['url']) ?>"
				alt="<?php echo esc_attr($work_thumbnail['alt']) ?>"
			>
			<?php } ?>
		</div>
		<div class="p-production__site-name">
			<h3 class="p-production__headline">
				<span class="u-underline-yellow">サイト名</span>
			</h3>
			<p class="p-production__text">
				<?php echo get_field('work-name'); ?>
			</p>
		</div>
		<div class="p-production__making-time">
			<h3 class="p-production__headline">
				<span class="u-underline-yellow">制作期間</span>
			</h3>
			<p class="p-production__text">
				<?php echo get_field('work-making-time') ?>
			</p>
		</div>
		<div class="p-production__tech">
			<h3 class="p-production__headline">
				<span class="u-underline-yellow">使用技術</span>
			</h3>
			<p class="p-production__text">
				<?php echo get_field('work-tech'); ?>
			</p>
		</div>
		<div class="p-production__summary">
			<h3 class="p-production__headline">
				<span class="u-underline-yellow">制作内容</span>
			</h3>
			<p class="p-production__text">
				<?php echo get_field('work-detail') ?>
			</p>
		</div>
	</article>
	<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>
