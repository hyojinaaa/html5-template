<?php

class HomeController extends PageController {

	// Properties
	private $latestProducts;

	// Constructor
	public function __construct() {

		// Prepare the title
		$this->title = 'Home Page';

		// Prepare meta description
		$this->metaDesc = 'See our wonderful toys and gifts';

		// Get latest products

	}

	public function buildHTML() {
		echo $this->title;
	}

}