<?php
use App\Helper\WordpressHelper;
$wordpress = new WordpressHelper;
?>

			</main>

			<footer class="u-section c-footer">
				
				<div class="footer-curve" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/build/img/curve-background-blue.png)"></div>

				<div class="c-footer__inner">

					<!-- Footer CTA -->
					<?php /* include('partials/footer-cta.php'); */ ?>

					<!-- Social links -->
					<?php include('partials/social-icons.php'); ?>

					<div class="u-bg-color--primary-base u-l-horizontal-padding u-l-vertical-padding--small">

						<div class="u-l-container u-l-container--row">
							
							<div class="c-footer__column">
								<?= $render->view('Components/c-site-title', $wordpress->getBlogInfo('title')); ?>
							</div>
							
							<div class="c-footer__column">
								<div class="c-footer__inner-row">
									<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
									<div class="c-footer__inner-column">
										<ul class="c-footer__inner-column__item">
											<?php dynamic_sidebar( 'footer_1' ); ?>
										</ul>
									</div>
									<?php endif; ?>
									<?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
									<div class="c-footer__inner-column">
										<ul class="c-footer__inner-column__item">
											<?php dynamic_sidebar( 'footer_2' ); ?>
										</ul>
									</div>
									<?php endif; ?>
								</div>
							<div>

						</div>

					</div>

				</div>
				
				<div class="u-l-container">
					<?php if( pll_current_language() == 'en' ) : ?>
						<p class="c-footer__copyright"><?php echo  '&copy' . date('Y') . ' ' . get_bloginfo('title') . ' | ' . get_field('copyright_details', 'en') ?></p>
					<?php elseif( pll_current_language() == 'es' ) : ?>
						<p class="c-footer__copyright"><?php echo  '&copy' . date('Y') . ' ' . get_bloginfo('title') . ' | ' . get_field('copyright_details', 'es') ?></p>
					<?php elseif( pll_current_language() == 'de' ) : ?>
						<p class="c-footer__copyright"><?php echo  '&copy' . date('Y') . ' ' . get_bloginfo('title') . ' | ' . get_field('copyright_details', 'de') ?></p>
					<?php endif; ?>
				</div>

			</footer>

	 	</div>

		<?php 
		wp_footer(); 

		$googleAnalyticID = get_field('google_analytics', 'option');
		
		//Google Analytics
		$template = 'c-google-analytics';
		$data = [
			'UA' => $googleAnalyticID
		];

		echo $render->view('Components/' . $template, $data);

		?>

		<!-- 
			Chat 
			<div class="chat">
				<div class="chat__button"></div>
				<div class="chat__modal"></div>
			</div>
		-->
		
	</body>
</html>
