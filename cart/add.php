<?php
	
	session_start();	
	if(is_null($_SESSION['cart'])){
		$_SESSION['cart']= array();	
	}
	
	
	
	array_push($_SESSION['cart'], $_GET["id"]);
	foreach ($_SESSION['cart'] as $key => $value) {		
		echo $value. "<br>";
	}
	

?>

	<a href="cart.php">check cart</a><br>
	<a href="products.php">go back to products</a>
