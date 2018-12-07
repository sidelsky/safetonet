<?php

use App\Helper\Render;
//use Theme\Model\Downloads;

$render = new Render;
//$downloads = new Downloads();

include("header.php"); ?>
    
    <?php
    if( pll_current_language() == 'en' ) {
        $copy = 'Sorry, the page you’re looking for doesn’t seem to be here.';
    } elseif( pll_current_language() == 'es' ) {
        $copy = 'Lo sentimos, la página que buscas no parece estar aquí';
    } elseif( pll_current_language() == 'de' ) {
        $copy = 'Die von Ihnen angeforderte Seite existiert leider nicht';
    }
	?>
	

	<section class="u-section u-bg-color--bw-white">
    <div class="u-l-container u-l-container--shallow" data-in-viewport>
        <div class="u-l-container u-l-container--row u-l-horizontal-padding">
            <div class="c-additional-text">
            	<p><?= $copy ?></p>
            </div>
        </div>
    </div>
</section>

    
<?php include("footer.php"); ?>

