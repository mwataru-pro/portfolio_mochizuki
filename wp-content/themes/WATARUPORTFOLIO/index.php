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
<main class="l-main">
	<section class="p-about">
		<div class="p-about__inner">
			<div class="c-headline">
				<h2 class="c-headline__title">ABOUT THIS SITE</h2>
				<p class="c-headline__subtitle">このさいとについて</p>
			</div>
			<p class="p-about__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
		</div>
	</section>
	<section class="p-profile">
		<div class="p-profile__inner">
			<div class="c-headline">
				<h2 class="c-headline__title">PROFILE</h2>
				<p class="c-headline__subtitle">プロフィール</p>
			</div>
			<div class="p-profile__content">
				<figure class="p-profile__image-wrap u-smooth-trigger">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/profile-gray.png')); ?>" alt="望月亘">
				</figure>
				<div class="p-profile__text-wrap">
					<p class="p-profile__name">
						Mochizuki Watatu <span class="u-fontsize-s">望月 亘<span></p>
					<p class="p-profile__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
				</div>
			</div>
		</div>
	</section>
	<section class="p-top-works">
		<div class="p-top-works__inner">
			<div class="c-headline">
				<h2 class="c-headline__title">WORKS</h2>
				<p class="c-headline__subtitle">制作実績</p>
			</div>
			<ul class="p-top-works__cards">
				<li class="p-top-works__card">
					<a href="" class="p-top-works__thumbnail">
					<span class="c-link-mask">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/test-img.png')); ?>" alt="">
						<span class="c-link-mask__caption">実績タイトル</span>
					</span>
					</a>
				</li>
				<li class="p-top-works__card">
					<a href="" class="p-top-works__thumbnail">
					<span class="c-link-mask">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/test-img.png')); ?>" alt="">
						<span class="c-link-mask__caption">実績タイトル</span>
					</span>
					</a>
				</li>
				<li class="p-top-works__card">
					<a href="" class="p-top-works__thumbnail">
					<span class="c-link-mask">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/test-img.png')); ?>" alt="">
						<span class="c-link-mask__caption">実績タイトル</span>
					</span>
					</a>
				</li>
			</ul>
			<p class="p-top-works__button-wrap">
				<a href="" class="p-top-works__button c-button">制作実績一覧へ</a>
			</p>
		</div>
	</section>
	<section class="p-skill">
		<div class="p-skill__inner">
			<div class="c-headline">
				<h2 class="c-headline__title">SKILL</h2>
				<p class="c-headline__subtitle">スキル</p>
			</div>
		</div>
	</section>
	<section class="p-top-contact">
		<div class="p-top-contact__inner">
			<div class="c-headline">
				<h2 class="c-headline__title">CONTACT</h2>
				<p class="c-headline__subtitle">お問い合わせ</p>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
