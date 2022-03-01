<?php get_header(); ?>
<div class="p-work">
	<div class="p-work__inner">
		<div class="p-work__headline c-headline">
			<h2 class="c-headline__title">WORKS</h2>
			<p class="c-headline__subtitle">制作実績</p>
		</div>
		<ul class="p-work-cards">
		<?php $my_query = sub_loop(6);
		if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<li class="p-work-card u-smooth-trigger">
				<a href="<?php the_permalink(); ?>" class="p-work-card__thumbnail">
					<span class="c-link-mask">
					<?php $work_thumbnail = get_field('work-thumbnail');
					if($work_thumbnail){
						?>
						<figure>
							<img
							src="<?php echo esc_url($work_thumbnail['url']) ?>"
							alt="<?php echo esc_attr($work_thumbnail['alt']) ?>"
							>
						</figure>
						<?php } ?>
						<span class="c-link-mask__caption"><?php echo get_field('work-name'); ?></span>
					</span>
				</a>
			</li>
		<?php endwhile; ?>
		<?php else : ?>
			<li>記事がありません</li>
			<?php wp_reset_postdata(); endif; ?>
		</ul>
	</div>
</div>
<?php get_footer(); ?>
