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
		<h2 id="js-svg-animation" class="p-first-view__title">
		</h2>
		<p class="p-first-view__image u-smooth-trigger">
			<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/first-view1.png')); ?>" alt="man illust">
		</p>
		<div class="c-fluid"></div>
	</div>
</div>
<main class="l-main">
	<section id="about-site" class="p-about">
		<div class="p-about__inner">
			<div class="p-about__headline c-headline u-smooth-trigger">
				<h2 class="c-headline__title">ABOUT THIS SITE</h2>
				<p class="c-headline__subtitle">このさいとについて</p>
			</div>
			<p class="p-about__text u-smooth-trigger">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
		</div>
	</section>
	<section id="profile" class="p-profile">
		<div class="p-profile__inner">
			<div class="p-profile__headline c-headline u-smooth-trigger">
				<h2 class="c-headline__title">PROFILE</h2>
				<p class="c-headline__subtitle">プロフィール</p>
			</div>
			<div class="p-profile__content">
				<figure class="p-profile__image-wrap u-smooth-trigger">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/profile-gray.png')); ?>" alt="望月亘">
				</figure>
				<div class="p-profile__text-wrap">
					<p class="p-profile__name u-smooth-trigger">
						Mochizuki Watatu <span class="p-profile__kana">望月 亘<span></p>
					<p class="p-profile__text u-smooth-trigger">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
				</div>
			</div>
		</div>
	</section>
	<section class="p-top-works">
		<div class="p-top-works__inner">
			<div class="p-top-works__headline c-headline u-smooth-trigger">
				<h2 class="c-headline__title">WORKS</h2>
				<p class="c-headline__subtitle">制作実績</p>
			</div>
			<ul class="p-work-cards p-top-works__list">
			<?php $my_query = sub_loop(3);
			if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li class="p-work-card p-top-works__card u-smooth-trigger">
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
			<p class="p-top-works__button-wrap u-smooth-trigger">
				<a href="<?php echo get_post_type_archive_link( 'work' ); ?>" class="p-top-works__button c-button">制作実績一覧へ</a>
			</p>
		</div>
	</section>
	<section id="skill" class="p-skill">
		<div class="p-skill__inner">
			<div class="p-skill__headline c-headline u-smooth-trigger">
				<h2 class="c-headline__title">SKILL</h2>
				<p class="c-headline__subtitle">スキル</p>
			</div>
			<ul class="p-skill__list">
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#htmlIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						HTML
					</p>
				</li>
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#cssIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						CSS
					</p>
				</li>
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#jsIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						JavaScript
					</p>
				</li>
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#phpIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						PHP
					</p>
				</li>
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#rubyIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						Ruby
					</p>
				</li>
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#railsIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						Ruby on Rails
					</p>
				</li>
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#gitIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						git
					</p>
				</li>
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#githubIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						GitHub
					</p>
				</li>
				<li class="p-skill__item u-smooth-trigger">
					<svg class="p-skill__icon">
						<use xlink:href="#awsIcon"/>
					</svg>
					<p class="p-skill__skill-name">
						Amazon Web Service
					</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="p-top-contact">
		<div class="p-top-contact__inner">
			<div class="p-top-contact__headline c-headline u-smooth-trigger">
				<h2 class="c-headline__title">CONTACT</h2>
				<p class="c-headline__subtitle">お問い合わせ</p>
			</div>
			<p class="p-top-contact__text">
				下記フォームより、<br>
				お気軽にお問い合わせください。
			</p>
			<p class="p-top-contact__button-wrap u-smooth-trigger">
				<a href="<?php echo home_url('contact-form'); ?>" class="p-top-contact__button c-button">お問い合わせフォーム</a>
			</p>
		</div>
	</section>
</main>
<?php get_footer(); ?>
