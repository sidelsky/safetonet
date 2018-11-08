<?php
use App\Helper\Page;
use App\Helper\Render;
use App\Helper\WordpressHelper;

use Theme\Model\Hero;
use Theme\Model\SubpageHero;

$page = new Page;
$render = new Render;
$hero = new Hero;
$subpageHero = new SubpageHero;
$wordpress = new WordpressHelper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?= $page->getPageTitle(); ?></title>

		<meta name="theme-color" content="#333">
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
      	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/build/img/favicon.png" sizes="16x16" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> id="body">

	<?php
		/**
		 * Theme Data
		 */
		include('Theme/Data/en.php');
	?>

	<div class="c-mobile-navigation">
		<?php
			$menu_args = [
				'menu' => 'Tertiary navigation',
				'container' => '',
				'echo' => true,
				'items_wrap' => '<ul class="c-mobile-navigation__menu">%3$s</ul>'
			];
			echo '<nav>';
				wp_nav_menu($menu_args); 
			echo '</nav>';
		?>
	</div>
		
		<div id="header" class="header l-site-header-container <?= is_front_page() ? 'l-site-header-container--blue' : 'l-site-header-container--white'; ?>">

			<!-- START: Hamburger -->
			<a class="c-hamburger js-hamburger">
				<span class="c-hamburger__bar"></span>
			</a>
			<!-- END: Hamburger -->

			<div class="u-l-container u-l-horizontal-padding">
				<div class="l-site-header c-site-header">
					<div class="l-site-header__title">
						<?= $render->view('Components/c-site-title', $wordpress->getBlogInfo('title')); ?>
					</div>
					<div class="l-site-header__nav">
						<?php
							$menu_args = [
								'menu' => 'Primary navigation',
								'container' => '',
								'echo' => true,
								'items_wrap' => '<ul class="c-site-nav__menu">%3$s</ul>'
							];
							echo '<nav class="c-site-nav">';
								wp_nav_menu($menu_args); 
							echo '</nav>';
						?>
					</div>
				</div>
			</div>
			
			<?php

			// Page IDs from WordPress
			$parent =[
				'about' => [
					'pageId' => 2,
					'navName' => 'Quaternary navigation'
				],
				'contact' => [
					'pageId' => 315,
					'navName' => 'Secondary navigation'
				]
			];

			echo '<div class="u-l-container u-l-horizontal-padding subnavigation-wrapper">';

				if ( is_tree( $parent['about']['pageId'] ) ) {
					$menu_args = [
						'menu' => $parent['about']['navName'],
						'container' => '',
						'echo' => true,
						'items_wrap' => '<ul class="c-site-nav__menu">%3$s</ul>'
					];
					echo '<nav class="c-site-nav c-site-nav--subnavigation">';
						wp_nav_menu($menu_args); 
					echo '</nav>';
				} elseif( is_tree( $parent['contact']['pageId']) ) {
					$menu_args = [
						'menu' => $parent['contact']['navName'],
						'container' => '',
						'echo' => true,
						'items_wrap' => '<ul class="c-site-nav__menu">%3$s</ul>'
					];
					echo '<nav class="c-site-nav c-site-nav--subnavigation">';
						wp_nav_menu($menu_args); 
					echo '</nav>';
				}; 


			echo '</div>';

			?>
		</div>


		<main role="main" class="main">

		<?php
		/**
		 * Render Hero
		 */
		
		if( is_front_page() ) {
			//Home page Hero
			echo $render->view('Components/c-hero', $hero->getHero());
		} elseif( is_page_template() ) {
			//Sub page Hero
			echo $render->view('Components/c-subpage-hero', $subpageHero->getHero());
		} else {
			//Sub page Hero
			echo $render->view('Components/c-subpage-hero', $subpageHero->getHero());
		}  

