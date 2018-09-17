<?php
use App\Helper\CustomPostType;
use App\Helper\CustomTaxonomy;
use App\Helper\Enqueues;
use App\Helper\Reset;
use App\Helper\DisableComments;
use App\Helper\Utilities;
use App\Helper\ProjectConfig;

//Featured Image
add_theme_support( 'post-thumbnails' );

//Reset Wordpress (removes redundant scripts etc.)
    add_action('init', 'resetWordpressDefaults');
    function resetWordpressDefaults()
    {
        // DisableComments::disableAllComments();
        // Reset::resetWordpressDefaults();
    }

    //Enqueue scripts and styles
    add_action('wp_enqueue_scripts', 'enqueueScriptsAndStyles');
    function enqueueScriptsAndStyles()
    {
        new Enqueues();
    }

    //Post types
    add_action('init', 'createPostTypes');
    function createPostTypes()
    {
        //CustomPostType::createPostType('FAQ', 'FAQs');

        $instance = new CustomPostType();
        $instance->createPostType('FAQ', 'FAQs');

    }

    //Static functions, by definition, cannot and do not depend on any instance properties of the class. That is, they do not require an instance of the class to execute (and so can be executed. In some sense, this means that the function doesn't (and will never need to) depend on members or methods (public or private) of the class.

    // class Example {

    //     // property declaration
    //     public $value = "The text in the property";
    
    //     // method declaration
    //     public function displayValue() {
    //         echo $this->value;
    //     }
    
    //     static function displayText() {
    //         echo "The text from the static function";
    //     }
    // }
    
    
    // $instance = new Example();
    // $instance->displayValue();
    
    // $instance->displayText();
    
    // // Example::displayValue();         // Direct call to a non static function not allowed
    
    // Example::displayText();




    //Taxonomies
    add_action('init', 'createTaxonomies');
    function createTaxonomies()
    {
        // $eventType = CustomTaxonomy::createTaxonomy("Event Type", "Event Types", "event_type");
        // register_taxonomy("event_type", array("event"), $eventType["args"]);
    }

    //Project configuration - menus, image crops etc.
    add_action('init', 'projectConfig');
    function projectConfig()
    {
        // ProjectConfig::ProjectConfig();
    }

    /**
    * Require all functions within the functions folder
    */
    function getFunctions()
    {

        $folder = '/functions/*.php';
        $files = glob(dirname(__FILE__) . $folder);

        foreach( $files as $file ) {
            require_once( $file );
        }

    }

    getFunctions();