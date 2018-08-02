<?php
namespace Theme\Model;

use App\WordPress\WordPress;

class Features {

   public function __construct($layout)
   {
      $this->layout = $layout;
   }

   public function getFeatures() {
      $acfFeatureItems = $this->layout['feature_item'];
      $featureItems = [];
   
      foreach($acfFeatureItems as $feature) {
         $featureItems[] = [
            'featureIcon' => $feature['icon']['url'],
            'featureTitle' => $feature['title'],
            'featureDescription' => $feature['description']
         ];
      }

      return [
         'layoutName' => 'features_module',
         'items' => $featureItems,
      ];
   }
}