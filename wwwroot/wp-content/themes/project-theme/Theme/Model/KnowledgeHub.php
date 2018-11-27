<?php
namespace Theme\Model;
use App\WordPress\WordPress;

class KnowledgeHub {
	
    public function __construct()
    {
		$this->section = get_field('section');
	}
	
	private function optimisedKnowledgeHubList($sections) {
		
		$optimisedKnowledgeHubList = [];

		foreach($sections as $section) {
            
            $optimisedKnowledgeHubList[] = [
                'sectionTitle' => $section['section_title']
			];
			
			foreach($subsections['subsection'] as $subsection) {
				$planDetails[] = [
					'planDetailTitle' => $subsection['plan_detail_title']
				];
		   }

        }

		return $optimisedKnowledgeHubList;

	}
	
    public function getData() {

		return [
			'sectionList' => $this->optimisedKnowledgeHubList($this->section)
	   ];
	   
    }
 }