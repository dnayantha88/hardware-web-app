<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>KGD Hardware</title>
        <link href="css/menu.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
		<a href="index.php" ><h1 style="text-align:center; color:red">K G D      H A R D W A R E</h1>
		</a>
        <br/>
		<br/>
		
		<ul >
			<li class="a2"><a style="font-family:georgia, times, serif;
				color:white" href="index.php">HOME</a></li>
			<li class="a2"><a style="font-family:georgia, times, serif;
				color:white" href="login.php">VISITOR LOG IN</a></li>
			<li class="a2"><a style="font-family:georgia, times, serif;
				color:white" href="adminlogin.php">ADMIN LOG IN</a></li>
		</ul>   
        
		<br><br><br><br>
       
        <hr />
       
        <?php
        
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "kgd";
        $port = "3306";
        
        $con = new mysqli($host, $username, $password, $database, $port);
        echo mysqli_error($con);
        
        $quary = "SELECT * FROM product";
        $result = $con->query($quary);
        ?>
        
        
        <form style="border:5px dotted red; width:95%; background-color:#ccffcc" action="" method="POST"  role="form">

			<h3>OUR PRODUCTS</h3>
            <hr >
                            
            <?php
				while ($row = mysqli_fetch_assoc($result)){
            ?>
                                   
            <h3><?php echo $row ["name"]  ?></h3>
			<img src="<?php echo $row ["image"]  ?>" alt="a" style="width:15%; margin:5px; height:15%">
			<h4 style="color:green">Rs.<?php echo $row ["price"]  ?></h4>
            <p >More details: <?php echo $row ["description"]  ?></p><hr>
			
			<?php
			}
			?>
           
        </form>                   
    
                                   
        <hr>
		<hr >  
		
		<button>
			<a href="#">Back to Top</a></p>
		</button>
        
		<p>KGD Hardware © 2017 </p>

    </body>
</html>
