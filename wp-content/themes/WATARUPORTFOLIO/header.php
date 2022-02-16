<?php
/**
 *
 * This is header page
 *
 * @category   Components
 * @package    WordPress
 * @subpackage WATARUPORTFOLIO
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @since      1.0.0
 */

/**
 * Comment
 */

require_once ABSPATH . 'wp-admin/includes/plugin.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<link rel="icon" href="<?php esc_url(get_theme_file_uri('/assets/img/favicon.ico')); ?>" />
	<script src="https://kit.fontawesome.com/b590762531.js" crossorigin="anonymous"></script>
	<?php add_theme_support('title-tag'); ?>
	<?php wp_head(); ?>
</head>
<body>
	<header id="header" class="l-header">
		<div class="l-header__inner">
			<h1 class="l-header__logo">
				<a href="<?php echo esc_url(home_url()); ?>" class="link">WATARU PORTFOLIO</a>
			</h1>
			<?php echo set_global_menu(); ?>
			<button type="button" class="js-open-button l-hamburger">
				<span class="l-hamburger__bar"></span>
				<span class="l-hamburger__bar"></span>
				<span class="l-hamburger__bar"></span>
			</button>
		</div>
	</header>
