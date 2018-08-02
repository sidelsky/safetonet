<section class="u-section u-bg-color--primary-base">
   <div class="u-l-container--center" data-in-viewport>
      <div class="u-l-container u-l-container--row u-l-horizontal-padding u-l-vertical-padding">

         <div class="c-features">
            <?php foreach($data['items'] as $feature) { ?>
               <div class="c-feature-card">
                  <img src="<?= $feature['featureIcon'] ?>" class="c-feature-card__icon">
                  <h3 class="c-site-headings--h3"><?= $feature['featureTitle'] ?></h3>
                  <?= $feature['featureDescription'] ?>
               </div>
               <?php } ?>
         </div>

      </div>
   </div>
</section>