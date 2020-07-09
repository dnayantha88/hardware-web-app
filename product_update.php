<!DOCTYPE html>

<html>
    <head>
        <title></title>
    </head>
    <body>
        
		<?php
			$itemname=$_POST["itemname"];
			$name=$_POST["pn"];
			$description=$_POST["description"];
			$price=$_POST["price"];

			$con=new mysqli("localhost", "root","", "kgd", "3306");

			$query="UPDATE  product set name='".$name."',price='".$price."',description='".$description."' where name='".$itemname."'";
			$con->query($query); 
			  
			echo "done";
			header("location:products.php");

		?>
    </body>
</html>
