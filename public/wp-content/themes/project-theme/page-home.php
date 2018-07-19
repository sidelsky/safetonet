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


include("header.php"); ?>
    
    <?=
    /**
     * Render Hero
     */
    $render->view('Components/c-hero', $hero->getHero()); ?>
    
    <?php 
        foreach($allLayouts as $key => $value) {

            // Promos
            $templateName = '';

            if ($key === 'promo_module') {
                $templateName = 'c-layout';
            }

            //print_r($value);

            //echo $render->view('Components/' . $templateName, $value);
        }
    ?>
<?php include("footer.php"); ?>
