<?php
namespace Theme\Model;

use App\WordPress\WordPress;
//use \WP_Query;


class SubpageHero {

   public function getHero() {
      return [
         'title' => get_the_title(),
         'content' => apply_filters('the_content', get_the_content()),
         'backgroundImage' => get_the_post_thumbnail_url()
      ];
   }
}