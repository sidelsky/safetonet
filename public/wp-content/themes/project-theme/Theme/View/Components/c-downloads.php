<section class="u-section u-bg-color--bw-white">
    <div class="u-l-container--center u-l-container--shallow" data-in-viewport>
        <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding">
            <?php foreach($data['downloads'] as $download) { ?>
                <?= $download['deviceName']; ?>
                <img src="<?= $download['typeOfDevice']; ?>">
                <img src="<?= $download['deviceFeatureImage']; ?>">
                <img src="<?= $download['appStoreLogo']; ?>">

                <ul>
                    <?php foreach($download['downloadDetails'] as $requirement) { ?>
                        <li class="c-plan-card__detail"><?= $requirement['requirement'] ?></li>
                    <?php } ?>  
                </ul>

            <?php } ?>
        </div>
    </div>
</section>