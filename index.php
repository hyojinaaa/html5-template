<?php 

// Require the PageController
require 'app/controllers/PageController.php';

// If the user has requested a page
if( isset($_GET['page']) ) {
	// User requested a page
	$requestedPage = $_GET['page'];
} else {	
	// Load the home page
	$requestedPage = 'home';
}



// What page has the user requested?
switch( $requestedPage ) {

	case 'home':
		// Load the home page files
		require 'app/controllers/HomeController.php';
		$controller = new HomeController();
		$controller->buildHTML();
	break;

	case 'products':
	
	break;

	default:
	
	break;
}
