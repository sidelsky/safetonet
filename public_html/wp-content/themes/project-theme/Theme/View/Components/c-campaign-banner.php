<?php if( $data['showCampaignBanner'] ) : ?>
	<section class="u-section u-bg-color--bw-white">
	<div class="u-l-container--center" data-in-viewport>
		<div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding--small">

            <div class="c-campaign-banner">
                <h2 class="c-site-headings--h2 c-site-headings--h2--campaign-banner c-site-headings--h2--feature"><?= $data['title']; ?></h2>
                <a href="<?= $data['link']; ?>" class="u-button u-button u-button--small c-campaign-banner__button">Join</a>
            </div>    

		</div>
	</div>
	</section>
<?php endif; ?>