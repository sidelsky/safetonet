<?php
/**
 * Template name: Industry Recognition
 */
use App\Helper\Render;
use Theme\Model\Awards;

$render = new Render;
$awards = new Awards();

include("header.php"); ?>
    
    <?php
        //Awards
        $template = 'c-awards';
        $data = $awards->getData();
        echo $render->view('Components/' . $template, $data);
    ?>

<?php include("footer.php"); ?>
