<?php
use App\Helper\WordpressHelper;
$wordpress = new WordpressHelper;
?>

			</main>

			<footer class="u-section c-footer">
				
				<div class="footer-curve" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/build/img/curve-background-blue.png)"></div>

				<div class="c-footer__inner">

					<!-- Footer CTA -->
					<div class="footer-cta u-bg-color--primary-base u-l-horizontal-padding">
						<div class="u-l-container u-l-container--row u-section-underline footer-cta__row">
							<div class="footer-cta__column">
								<h2 class="footer-cta__title">Ready to get started?</h2>
								<p class="footer-cta__paragraph">Download the App to start your FREE trial.</p>
							</div>
							<div class="footer-cta__column">
								<?= $render->view('Components/c-button'); ?>
							</div>
						</div>
					</div>

					<!-- Social links -->
					<div class="social-links u-bg-color--primary-base u-l-horizontal-padding">
						<div class="u-l-container u-section-underline social-links__row">
							<span class="social-links__title">Connect with us</span>
							<?php foreach ($themeData['social'] as $item) { ?>
								<a href="<?= $item['url']; ?>" target="<?= $item['target']; ?>">
									<svg class="u-icon social-links__icon">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-<?= $item['icon']; ?>" viewBox="0 0 32 32"></use>
									</svg>
								</a>
							<?php }?>
						</div>	
					</div>

					<div class="u-bg-color--primary-base u-l-horizontal-padding u-l-vertical-padding--small">

						<div class="u-l-container u-l-container--row">
							
							<div class="c-footer__column">
								<?= $render->view('Components/c-site-title', $wordpress->getBlogInfo('title')); ?>
							</div>
							
							<div class="c-footer__column">
								<div class="c-footer__inner-row">
								<?php foreach ($themeData['footerNavigation'] as $column) { ?>
									<div class="c-footer__inner-column">
										<h4 class="c-site-headings--h4"><?php echo $column['columnTitle']; ?></h4>
										<ul class="c-footer__inner-column__item">
											<?php foreach ($column['items'] as $item) { ?>
												<li>
													<a href="<?php echo $item['url']; ?>" >
														<?php echo $item['title']; ?>
													</a>
												</li>
											<?php }?>
										</ul>
									</div>
								<?php }?>
								</div>
							<div>

						</div>

					</div>

				</div>
				
				<div class="u-l-container">		
					<p class="c-footer__copyright"><?php echo $themeData['copyright']['details'];?></p>
				</div>

			</footer>

	 	</div>

		<?php wp_footer(); ?>
	</body>
</html>
