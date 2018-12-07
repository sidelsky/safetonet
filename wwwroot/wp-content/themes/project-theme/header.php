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
	?>
	<?php if( pll_current_language() == 'en' ) : ?>
		<?php include('Theme/Data/en.php'); ?>
	<?php elseif( pll_current_language() == 'es' ) : ?>
		<?php include('Theme/Data/es.php'); ?>
	<?php elseif( pll_current_language() == 'de' ) : ?>
		<?php include('Theme/Data/de.php'); ?>
	<?php endif; ?>

	<!-- START: Mobile Vavigation -->
	<div class="c-mobile-navigation">

		<?php
			$menu_args = [
				'menu' => 'Tertiary navigation',
				'container' => '',
				'echo' => true,
				'items_wrap' => '<ul class="c-mobile-navigation__menu">%3$s</ul>'
			];
			echo '<nav>';
				echo '<ul class="c-lang c-lang--mobile">';
				pll_the_languages();
				echo '</ul>';
				wp_nav_menu($menu_args); 
			echo '</nav>';
		?>
	</div>
	<!-- END: Mobile Navigation -->
		
		<div id="header" class="header l-site-header-container <?= is_front_page() ? 'l-site-header-container--blue' : 'l-site-header-container--white'; ?>">

			<!-- START: Hamburger -->
			<a class="c-hamburger js-hamburger">
				<span class="c-hamburger__bar"></span>
			</a>
			<!-- END: Hamburger -->

			<div class="u-l-container u-l-horizontal-padding">
				
				<!-- START: Language Switcher -->
				<ul class="c-lang c-lang--desktop"><?php pll_the_languages();?></ul>
				<!-- END: Language Switcher -->

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


			// Page IDs from WordPress used to define the subnavigation
			$parent_EN =[
				'about' => [
					'pageId' => 2,
					'navName' => 'Quaternary navigation'
				],
				'contact' => [
					'pageId' => 262,
					'navName' => 'Secondary navigation'
				]
			];

			$parent_ES =[
				'about' => [
					'pageId' => 917,
					'navName' => 'Quaternary navigation spanish'
				],
				'contact' => [
					'pageId' => 694,
					'navName' => 'Secondary navigation spanish'
				]
			];

			$parent_DE =[
				'about' => [
					'pageId' => 729,
					'navName' => 'Quaternary navigation german'
				],
				'contact' => [
					'pageId' => 1045,
					'navName' => 'Secondary navigation german'
				]
			];

			if( pll_current_language() == 'en' ) {
				$parent = $parent_EN;
			} elseif( pll_current_language() == 'es' ) {
				$parent = $parent_ES;
			} elseif( pll_current_language() == 'de' ) {
				$parent = $parent_DE;
			}


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

