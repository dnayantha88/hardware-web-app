<!DOCTYPE html>
<html>
    <head>
        
        <title></title>
    </head>
    <body>
        
        <?php

        $product = $_POST["pn"];
        $price = $_POST["price"];
        $propic= $_FILES["file"] ["tmp_name"];
        $description = $_POST["description"];
        $path= "products/".$product.".jpg";

        $server = "localhost";
        $username = "root";
        $pass = "";
        $database = "kgd";
        $port = "3306";
        
        $con = new mysqli($server, $username, $pass, $database,$port);
        echo mysqli_error($con);
        
        
        $quary = "DELETE FROM product where name= '".$product."' ";
        
        $con->query($quary);
        
        $user_id = $con->insert_id;
        
        mysqli_connect_errno($con);
        
        header("location:products.php");
        
        ?>
    

    </body>
</html>
