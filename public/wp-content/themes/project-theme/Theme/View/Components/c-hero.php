<section class="u-section">
   <div class="u-l-container--center c-hero" <?= $data['backgroundImage'] ? 'style="background-image:url('. $data['backgroundImage'] .')"' : ''; ?> data-in-viewport>   
      
      <div class="u-l-container u-l-horizontal-padding">
         <div class="u-column u-column--half-width">
            <h1 class="c-site-headings c-site-headings--uppercase c-site-headings--underline c-site-headings--h1"><?= $data['title'] ?></h1>
            <div class="c-hero__content c-hero__content--large">
               <?= $data['content'] ?>
               <div class="store-icons">
                  <?php

                  //App & Play icons
                  foreach ($data['store-icons'] as $value) {
                  echo '<a href="'. $value['url'] .'" target="_blank" class="store-icons__href">';
                        echo '<img src="'. get_bloginfo('template_url') . '/assets/build/img/' . $value['icon'] .'" class="store-icons__icon">';
                  echo '</a>';
                  }
                  ?>
               </div>
         </div>
      </div>
      
   </div>
</section>