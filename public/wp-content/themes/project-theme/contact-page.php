<?php
/**
 * Template name: Contact
 */
use App\Helper\Render;
use Theme\Model\Contact;
use Theme\Model\Enquiries;

$render = new Render;
$contact = new Contact();
$enquiries = new Enquiries();

include("header.php"); ?>
    
    <?php
        //Contact
        $template = 'c-contact';
        $data = $contact->getData();
        echo $render->view('Components/' . $template, $data);

        //Enquiries
        $template = 'c-enquiries';
        $data = $enquiries->getData();
        echo $render->view('Components/' . $template, $data);
    ?>

<?php include("footer.php"); ?>
