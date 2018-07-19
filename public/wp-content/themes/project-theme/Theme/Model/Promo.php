<?php
namespace Theme\Model;

use App\WordPress\WordPress;
//use \WP_Query;


class Promo {

   public function __construct()
   {
      
   }

   public function getHero() {
      return [
         'title' => get_the_title(),
         'content' => apply_filters('the_content', get_the_content()),
         'backgroundImage' => get_the_post_thumbnail_url(),
         'store-icons' => [
            'app-store' => [
               'icon' => 'iOS-App-Store-Badge.png',
               'url' => 'http://www.appstore.com',
            ],
            'play-store' => [
               'icon' => 'Play-App-Store-Badge.png',
               'url' => 'http://www.google.com'
            ]
         ]
      ];
   }
}