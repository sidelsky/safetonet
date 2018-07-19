<?php
namespace Theme\Model;

use App\WordPress\WordPress;
use \WP_Query;


class Layout {

   public function __construct()
   {
      $this->layoutBuilder = get_field('layout_builder');
      $this->layoutOutput = [];
      $this->setPromos();
   }


   public function setPromos() {
      
      foreach ($this->layoutBuilder as $layout) {
         $layoutName = $layout['acf_fc_layout'];

         
         if ($layoutName === 'promo_module') {
            $contentPosition = $layout['content_position'];
            $acfPromoItems = $layout['promo_item'];
            $promoItems = [];
            $promosTitle = $layout['promo_title'];
            $position = $layout['content_position'];
            $promosBackground = $layout['background_image']['url'];
         
            // foreach($acfPromoItems as $promo) {
            //    $promoItems[] = [
            //       'promoTitle' => $promo['promo_item_title'],
            //       'promoIcon' => $promo['promo_item_icon']['url'],
            //       'promoDescription' => $promo['promo_item_description']
            //    ];
            // }

            $this->layout['promo_module'] = [
               'title' => $promosTitle,
               'background' => $promosBackground,
               'position' => $position,
               'items' => $promoItems
            ];

            
         }

         array_push($this->layoutOutput,$layout);

         // $this->[$layout];

         //print_r($this->layout);
         //return $this->layout;
         
      }
   }
   
   public function getLayout() {
      return $this->layoutOutput;
   }
}