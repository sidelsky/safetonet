<section class="u-section u-bg-color--bw-white">
    <div class="u-l-container u-l-container--shallow" data-in-viewport>
        <div class="u-l-container u-l-container--row u-l-horizontal-padding">
            <?php foreach($data['awardsList'] as $award) { ?>
                <div class="c-awards">
                    <div class="canvas">
                        <h4 class="c-awards__title"><?= $award['awardsTitle']; ?></h4>
                        <span class="c-awards__description"><?= $award['awardDescription']; ?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>