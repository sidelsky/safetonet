<?php
/**
 * Template name: About
 */
use App\Helper\Render;
use Theme\Model\AdditionalText;

$render = new Render;
$additionalText = new AdditionalText();

include("header.php");

    //Additional Text
    $template = 'c-additional-text';
    $data = $additionalText->getData();
    echo $render->view('Components/' . $template, $data);

include("footer.php"); 
?>