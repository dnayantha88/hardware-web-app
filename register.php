

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

<img src="images/e.jpg" style="display:block;margin:auto;  width:20%">

                                
               <form style="border:3px solid #f1f1f1; background-color:#00ffff" action="register_process.php" method="post">
<h3 style="text-align:center; color:blue">Sign up</h3>
 				
				<?php
                                if (isset($_GET["msg"])) {
                                    //error msg
                                    ?>
                                    <p style="color:red"><?php echo $_GET["msg"]; ?>

                                        
                                    
                                        <?php
                                    }
                                    ?>

                                      
                                       <h4>First Name</h4>

                                       

                                            <input type="text"  placeholder="first name" required="" name="fn">

                                        

                                                                        
                                       <h4>Last Name</h4>

                                        
  
                                          <input type="text"  name="ln" placeholder="last name" required="">
 
                                       
 
                                       <h4>Email</h4>
  
                                      
                                           <input type="email" name="email" placeholder="Email" required="">
   
                                  <h4>User Name</h4>
                                        
  <input type="text" name="un" placeholder="user name" required="">
 
                <h4>Password</h4>
 
                     <input type="password" name="pw" placeholder="password" required="">
  
                                     
                                 <br>
                             
                                            <button type="submit" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Register</button>

                                            <button type="submit" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Reset</button>
 
                                                            
<h4>Already have a account?</h4> <a href="login.php" class="">Log in here</a>
 

</form>
 
  
                                  
        <hr>
	<hr >            
<button>
<a href="#">Back to Top</a></p>

</button>
                <p>KGD Hardware © 2017 </p>

            
    </body>
</html>
