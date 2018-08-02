<?php
use App\Helper\WordpressHelper;

$wordpress = new WordpressHelper;
?>

			</main>

			<footer class="u-section c-footer u-bg-color--primary-base">
				<div class="u-l-horizontal-padding u-l-vertical-padding">
					<div class="u-l-container">
						<div class="u-l-container--row">
							
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
