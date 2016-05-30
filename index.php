<?php 

// Get a copy of the header.php file
include 'app/templates/header.php';

// echo $_GET['page'];

// What page has the user requested?
switch( $_GET['page'] ) {

	case 'home':
		// Load the home page files
		echo 'Home page';
	break;

	case 'products':
		// Load the products page files
		echo 'Products page';
	break;

	default:
		// Page not found, tell the user 
		echo 'Page not found';
	break;
}

// Include the footer 
include 'app/templates/footer.php';
