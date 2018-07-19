<?php
use App\Helper\Page;
use App\Helper\Render;
use App\Helper\WordpressHelper;

$page = new Page;
$render = new Render;
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

	<body <?php body_class(); ?>>
		
		<div class="l-site-header-container">
			<div class="u-l-container u-l-horizontal-padding">
				<div class="l-site-header c-site-header">
					<div class="l-site-header__title">
						<?= $render->view('Components/c-site-title', $wordpress->getBlogInfo('title')); ?>
					</div>
					<div class="l-site-header__nav">
						<?= $render->view('Components/c-site-nav'); ?>
					</div>
				</div>
			</div>
		</div>

		<main role="main">
