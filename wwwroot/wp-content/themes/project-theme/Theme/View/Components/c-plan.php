<?php

$planInfo_EN = [
    'currency' => '£',
    'time' => 'Month'
];

$planInfo_DE = [
    'currency' => '€',
    'time' => 'Monat'
];

$planInfo_ES = [
    'currency' => '€',
    'time' => 'Mes'
];


if( pll_current_language() == 'en' ) {
    $planLang = $planInfo_EN;
} elseif( pll_current_language() == 'es' ) {
    $planLang = $planInfo_ES;
} elseif( pll_current_language() == 'de' ) {
    $planLang = $planInfo_DE;
}

?>



<?php if( $data['showPlans'] ) : ?>
    <section class="u-section u-bg-color--bw-white">
        <div class="u-l-container--center u-l-container--shallow" data-in-viewport>
            <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding">
                <h2 class="c-site-headings--h2 c-site-headings--h2--has-subcopy c-site-headings--h2--feature"><?= $data['pricePlanTitle'] ?></h2>
                <p class="c-site-subcopy"><?= $data['pricePlanDescription'] ?></p>

                <!--START: Price Plan -->
                <?php foreach($data['plans'] as $plan) { ?>
                    <div class="c-plan-card">
                        <div class="c-plan-card__header">
                            <?php if( $plan['planIcon'] ) :?>
                                <img class="c-plan-card__logo-mark" src="<?= $plan['planIcon'] ?>" alt="<?= $plan['planTitle'] ?>">
                            <?php endif; ?>
                            <h3 class="c-plan-card__title"><?= $plan['planTitle'] ?></h3>
                            <p class="c-plan-card__description"><?= $plan['planDescription'] ?></p>
                        </div>
                        
                        <ul>
                        <?php foreach($plan['planDetails'] as $detail) { ?>
                            <li class="c-plan-card__detail"><strong><?= $detail['planDetailTitle'] ?></strong> - <?= $detail['planDetail'] ?></li>
                        <?php } ?>  
                        </ul>
                        
                        <div class="c-plan-card__price-container">
                            <span class="c-plan-card__price"><sup class="c-plan-card__sup"><?= $planLang['currency'] ?></sup><?= $plan['planPrice']; ?></span> <span><?= $planLang['time'] ?></span>
                        </div>

                        <div class="u-button c-plan-card__button" style="cursor: default">
                            <?= $plan['planButtonTitle']; ?>
                        </div>

                    </div>
                <?php } ?>
                <!--END: Price Plan -->

            </div>
        </div>
    </section>
<?php endif; ?>





