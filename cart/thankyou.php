<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>checkout</title>
</head>

<body  id="intro">
	<?php
		$adress= htmlspecialchars($_POST['adress']);

		echo "Thank you for your purchase, your products will arrive to ". $adress;
		session_unset(); 
		session_destroy();
		$_SESSION['cart']= array();	
	?>	
	<br>
	<a href="products.php">Go back to products</a>
</body>

</html>