<h1>All Products</h1>


<!-- Create a loop -->
<?php  
	foreach ( $this->allProducts as $item ): 
?>
<article>
	<h1> <?= $item['name'] ?> </h1>
	<img src="http://placehold.it/200" alt="">
	<p> <?= $item['desc'] ?> </p>
</article>
<?php 
	endforeach; ?>