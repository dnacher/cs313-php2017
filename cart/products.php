<html>
<head>
	<title>Products</title>
</head>
<body>

	  
	    	<?php 
	    	$num = 1;
	    	$total =0;
			$products = array(
				array('1','rubik3x3x3','Rubik cube 3x3x3','3x3x3.jpg','cube'),
				array('2','rubik4x4x4','Rubik cube 4x4x4','4x4x4.jpg','cube'),
				array('3','rubik5x5x5','Rubik cube 5x5x5','5x5x5.jpg','cube'),
				array('4','rubik7x7x7','Rubik cube 7x7x7','7x7x7.jpg','cube'),
				array('5','pyraminx','pyraminx version','pyraminx.jpg','pyramid'),
				array('6','voidcube','void cube','voidcube.jpg','cube'),
				array('7','mirrorcube','mirror cube','mirrorcube.jpg','cube'),
				array('8','megaminx','megaminx','megaminx.jpg','other'),
				array('9','axiscube','axis cube','axiscube.jpg','cube'),
				array('10','360cube','360 cube','360cube.jpg','other'),
			);
		
			for ($row = 0; $row < 10; $row++) {  				
  				echo "<ul>";
  				echo "<li>".$products[$row][2]."</li>";
  				echo "<img src=\"".$products[$row][3]."\" style=\"width:80px;height:80px;\"><br>";
  				echo "<a href=\"". "add.php?id=". $products[$row][0]. "\">Add to Cart</a>";
  				echo "</ul>";
			}
				
			/*foreach ($array as $item) {		
				if($total==0){
					echo "<table>";
				}
				if($num==1){
					echo "<tr>";
				}

				$object = (object) $item;
				echo "<td>". $item. "</td>";
				
				if($num==4){
					$num=0;
					echo "</tr>";
				}
				if($total==7){
					echo "</table>";					
				}
				$num+= 1;
				$total+=1;hm			}*/
		?>	   


		<a href="cleancart.php">clean cart</a>

</body>
</html>
