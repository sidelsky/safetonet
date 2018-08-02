<?php
namespace Theme\Model;

use App\WordPress\WordPress;


class Promos {

   public function __construct($layout)
   {
      $this->layout = $layout;
   }

   public function getPromos() {
      $acfPromoItems = $this->layout['promo_item'];
      $contentPosition = $this->layout['content_position'];
      $promosBackground = $this->layout['background_image']['url'];
      $promoItems = [];
      $promosTitle = $this->layout['promo_title'];
      $position = $this->layout['content_position'];
      $image = $this->layout['image']['url'];
   
      foreach($acfPromoItems as $promo) {
         $promoItems[] = [
            'promoTitle' => $promo['promo_item_title'],
            'promoIcon' => $promo['promo_item_icon']['url'],
            'promoDescription' => $promo['promo_item_description']
         ];
      }

      return [
         'layoutName' => 'promo_module',
         'items' => $promoItems,
         'title' => $promosTitle,
         'position' => $position,
         'image' => $image,
         'background' => $promosBackground
      ];
   }
}