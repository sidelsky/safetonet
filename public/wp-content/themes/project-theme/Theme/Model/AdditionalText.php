<?php
namespace Theme\Model;

use App\WordPress\WordPress;

class AdditionalText {
	
    public function __construct()
    {
		$this->additionalText = get_field('text_content');
	}
	
	private function optimisedAdditionalTextItem($additionalText) {
		
		$optimisedAdditionalTextItem = $this->additionalText;

		return $optimisedAdditionalTextItem;

	}
	
    public function getData() {

		return [
			'additionalTextItem' => $this->optimisedAdditionalTextItem($this->additionalText)
	   ];
	   
    }
 }