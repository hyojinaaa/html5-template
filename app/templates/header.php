<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> <?php echo $this->title ?> </title>
		<meta name="description" content="<?= $this->metaDesc ?>">
		<link rel="stylesheet" href="css/styles.css">

	</head>
	<body>

	 <!-- Set the New Zealand time -->
	<?php date_default_timezone_set('Pacific/Auckland'); ?>

	<nav>
		<ul>
			<li><a href="index.php?page=home">Home</a></li>
			<li><a href="index.php?page=products">Products</a></li>
			<li><a href="index.php?page=contact">Contact</a></li>
			<li><a href="index.php?page=register">Register</a></li>
			<li><a href="index.php?page=login">Log in</a></li>
		</ul>
	</nav>