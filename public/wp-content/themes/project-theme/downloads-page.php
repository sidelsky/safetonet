<?php
/**
 * Template name: Downloads
 */
use App\Helper\Render;
use Theme\Model\Test;

$render = new Render;
$test = new Test();

include("header.php"); ?>
    
    <?php

        //echo $render->view('Components/' . 'c-test', $test->getData());
        echo $render->view('Components/' . 'c-test', $test->getData());

    ?>
<?php include("footer.php"); ?>
