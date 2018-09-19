<?php
use App\Helper\Render;
$render = new Render;
?>

<section class="u-section">
   <div class="u-l-container--center c-hero" <?= $data['backgroundImage'] ? 'style="background-image:url('. $data['backgroundImage'] .')"' : ''; ?> data-in-viewport>   
      
      <div class="u-l-container u-l-horizontal-padding">
         <div class="u-column u-column--half-width">
            <h1 class="c-site-headings c-site-headings--uppercase c-site-headings--underline c-site-headings--h1"><?= $data['title'] ?></h1>
            <div class="c-hero__content c-hero__content--large">
               <?= $data['content'] ?>
               <?= $render->view('Components/c-button'); ?>
         </div>
      </div>
		
	</div>
	
<div class="hero-curve" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/build/img/curve-background.png)"></div>

</section>