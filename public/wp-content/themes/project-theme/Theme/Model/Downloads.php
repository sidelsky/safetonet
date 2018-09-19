<?php
namespace Theme\Model;

use App\WordPress\WordPress;

class Downloads {

   public function __construct($layout)
   {
      $this->layout = $layout;
   }

   public function getDownloads() {

	   $acfDownloads = $this->layout['the_device'];
	   $downloads = [];
	   
	   foreach($acfDownloads as $download) {
		   
		   $downloadDetails = [];

			foreach($download['requirements'] as $requirement) {
				$downloadDetails[] = [
					'requirement' => $requirement['requirement'],
				];
			}

		   $downloads[] = [
			'deviceName' => $download['device_name'],
			'typeOfDevice' => $download['type_of_device']['url'],
			'deviceFeatureImage' => $download['device_feature_image']['url'],
			'appStoreLogo' => $download['app_store_logo']['url'],
			'downloadDetails' => $downloadDetails
			];
		}

      return [
        'layoutName' => 'downloads',
		'downloads' => $downloads
      ];
   }
}