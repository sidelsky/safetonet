<?php
/*
    Template Name: Home Page
*/
use App\Helper\Render;
use Theme\Model\Hero;
use Theme\Model\Layout;

$render = new Render;
$hero = new Hero;
$layout = new Layout;

$allLayouts = $layout->getLayout();

//print_r($allLayouts);

include("header.php"); ?>
    
    <?=
    /**
     * Render Hero
     */
    $render->view('Components/c-hero', $hero->getHero()); ?>
    
    <?php 
        foreach($allLayouts as $value) {

            $templateName = '';
            
            switch ($value['layoutName']) {
                
                //Get the Promos
                case 'promo_module':
                    $templateName = 'c-promo';
                    break;

                //Get the Features
                case 'features_module':
                    $templateName = 'c-feature';
                    break;
            }

            echo $render->view('Components/' . $templateName, $value);
        }
    ?>
<?php include("footer.php"); ?>
