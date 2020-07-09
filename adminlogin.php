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
		
		<img src="images/b.jpg" style="display:block;margin:auto;  width:25%; height:25%">
                 
		<form style="border:3px solid #f1f1f1; background-color:#00ffff" action="adminlogin_process.php" method="POST"  role="form">
			<h3 style="text-align:center; color:blue">LOG IN</h3>
             
			<?php
                if (isset($_GET["msg"])) {
                    //error msg
            ?>
            <p style="color:red"><?php echo $_GET["msg"]; ?>

            <?php
            }
            ?>
                                    
            <h4>User Name</h4>
            <input type="text" class="form-control"  id="inputEmail3" placeholder="User Name" required="" name="user">
            <h4>Password</h4>
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="" name="pw">
            <br>
            <br>
            <button type="submit" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Log in</button>
            <button type="reset" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Reset</button>
            <br>

        </form>
                        
        <hr>
	`	<hr >            
		<button>
			<a href="#">Back to Top</a></p>
		</button>
        
		<p>KGD Hardware © 2017 </p>

    </body>
</html>
