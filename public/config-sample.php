<?php

// Copy and rename your file to config.php in the /public/ directory to edit your settings
// 0, FALSE or '' to disable
// Pretty much everything else to enable, such as 1, TRUE or any string

// GENERAL SETTINGS
ISQ::$general = array(
	'name' => 'URL shortener', // The name of your URL shortener
	'qr' => TRUE, // Do you want to display a QR code?
	'clipboard' => 1, // Do you want to enable zeroClipboard? (uses flash)
	'customstyle' => TRUE // Do you want to enable the custom stylesheet, found in public/custom.css?
);

// MENU LINKS
// Add more comma seperated arrays to add more links
ISQ::$links = array(
	array(
		'name' => ISQ::$general['name'],
		'link' => YOURLS_SITE
	),
	array(
		'name' => 'Tom Slominski',
		'link' => 'http://tomslominski.net/'
	),
	array(
		'name' => 'Get ∞²!',
		'link' => 'https://github.com/tomslominski/infinity-squared/'
	)
);

// SOCIAL SHARING
ISQ::$social = array(
	'twitter' => TRUE,
	'appdotnet' => TRUE,
	'facebook' => TRUE,
	'linkedin' => TRUE,
	'tumblr' => TRUE,
	'googleplus' => TRUE
);

// reCAPTCHA API KEYS
// Get yourls from https://www.google.com/recaptcha/admin
// If you don't want to use reCAPTCHA, that's cool. Leave this empty, and basic
// antispam protection will be provided.
ISQ::$recaptcha = array(
	'sitekey' => '',
	'secret' => ''
);

?>
