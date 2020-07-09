<?php

session_start();

?>

<html>

    <head>

        <meta charset="UTF-8">

        <title></title>

    </head>

    <body>

        <?php

        
        $user=$_POST["user"];

        	$password=$_POST["pw"];

        
          if (empty($user)) {

            header("location:adminlogin.php?msg= Plese Fill The User Name");

            
            
        }  elseif (empty ($password)) {

            header("location:adminlogin.php?msg= Plese Fill The password!&em=$user");

            
        }else{
        
         
   $con = new mysqli("localhost", "root", "", "kgd","3306");
 
  $query="SELECT myusername AND mypassword FROM admin WHERE myusername ='".$user."'AND mypassword ='".$password."'";

   $result=$con->query($query);

         
         
      
      
      
      $count = mysqli_num_rows($result);
      
      // If  table row must be 1 row
      
      if($count == 1) {
        
         
         header("location:adminhome.php");

                
             }  else {
 
            header("location:adminlogin.php?msg=Invalid User name Or Password");

             }

   }
        ?>
 
</body>

</html>
