<?php
namespace Theme\Model;

use App\WordPress\WordPress;
use \WP_Query;
use Theme\Model\Promos;
use Theme\Model\Features; //Add another module here

class Layout {

   public function __construct()
   {
      $this->layoutBuilder = get_field('layout_builder');
      $this->layoutOutput = [];
      
      foreach($this->layoutBuilder as $layout) {
         $layoutName = $layout['acf_fc_layout'];
         $currentLayout;
         
         //Add another module here
         switch ($layoutName) {
                
            //Get the Promos
            case 'promo_module':
               $promos = new Promos($layout);
               $currentLayout = $promos->getPromos();
               break;

            //Get the Features
            case 'features_module':
               $features = new Features($layout);
               $currentLayout = $features->getFeatures();
               break;
        }

         $this->layoutOutput[] = $currentLayout;
      }

   }
   
   public function getLayout() {
      return $this->layoutOutput;
   }
}