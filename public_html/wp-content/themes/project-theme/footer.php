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
