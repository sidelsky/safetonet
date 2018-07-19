<?php
use App\Helper\WordpressHelper;

$wordpress = new WordpressHelper;
?>

			</main>

			<footer class="u-section">
				<div class="c-footer u-l-horizontal-padding u-l-vertical-padding">
					<div class="u-l-container">
						<p class="c-footer__copyright">&copy; <?= $wordpress->getBlogInfo('title') ?></p>
					</div>
				</div>
			</footer>

	 	</div>

		<?php wp_footer(); ?>
	</body>
</html>
