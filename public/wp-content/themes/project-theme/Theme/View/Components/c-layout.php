<?php
/**
 * Layout Builder
 */
?>

<section class="u-section">
   <div class="u-l-container--center" <?= $data['background'] ? 'style="background-image:url('. $data['background'] .')"' : ''; ?> data-in-viewport>   
      <div class="u-l-container u-l-horizontal-padding u-l-vertical-padding">   
         <div class="u-row u-row--half-width <?= $data['position'] === (TRUE) ? '' : 'u-row--half-width--right'; ?>">
            
            <h2 class="c-site-headings c-site-headings--uppercase c-site-headings--underline c-site-headings--h2"><?= $data['title'] ?></h2>

            <?php foreach($data['items'] as $promo) { ?>
               <div class="c-promo-card">
                  
                  <div class="c-promo-card__icon">
                     <img src="<?= $promo['promoIcon'] ?>" alt="<?= $promo['promoTitle'] ?>">
                  </div>

                  <div class="c-promo-card__content">
                     <?php if( $promo['promoTitle'] ) : ?>
                        <h3 class="c-site-headings c-site-headings--h3"><?= $promo['promoTitle'] ?></h3>
                     <?php endif; ?>
                     <?= $promo['promoDescription'] ?>
                  </div>

               </div>
            <?php } ?>

         </div>
      </div>
   </div>
</section>