<?php
	 /**
		* This themeData file is included into the header.php file
		* @author Errol Sidelsky
		*/
	 $themeData = [
			
			//Copyright Info
			'copyright'    => [
				 'details'   => '&copy; ' . date('Y') . ' ' . get_bloginfo('title') . ' | The following are registered trademarks of SafeToNet Limited: SafeToNet, SafeToTalk, SafeToTell, Zero Trollerance, Introllerance. All Rights Reserved. '
			],

			//Footer content
			'footerNavigation' => [
				 'adviceGuidance' => [
						'columnTitle' => 'Our Company',
						'items' => [
							 [
									'title' => 'About SafeToNet',
									'url' => '/about_safetonet'
							 ],
							 [
									'title' => 'Industry Recognition',
									'url' => '/about_safetonet/industry_recognition'
							 ],
							 [
									'title' => 'FAQs',
									'url' => '/about_safetonet/frequently-asked-questions'
							 ],
							 [
									'title' => 'Contact',
									'url' => '/contact'
							 ],
						]
				 ],
				 'safeGuarding' => [
						'columnTitle' => 'Privacy & Terms',
						'items' => [
							 [
									'title' => 'Terms of Service',
									'url' => '/terms-of-service'
							 ],
							 [
									'title' => 'Privacy Policy',
									'url' => '/privacy-policy'
							 ],
						]
				 ]

				],

			//Social info
			'social' => [
				 'facebook' => [
						'title'  => 'facebook',
						'url'    => 'https://en-gb.facebook.com/safetonet/',
						'target' => '_blank',
						'icon'   => 'facebook'
				 ],
				 'twitter' => [
						'title'  => 'twitter',
						'url'    => 'https://twitter.com/safetonet?lang=en',
						'target' => '_blank',
						'icon'   => 'twitter'
		 ],
		 'linkedin' => [
						'title'  => 'linkedin',
						'url'    => 'https://www.linkedin.com/company/safetonet-ltd/',
						'target' => '_blank',
						'icon'   => 'linkedin'
				 ]

			]

	 ];