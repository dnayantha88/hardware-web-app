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
		<img src="images/c.png" style="display:block;margin:auto;  width:20%; height:20%">
		<h3>Details Add</h3>
		
		<form  style="border:3px solid #2196F3; background-color:#E0F7FA" role="form" action="product_add.php" method="POST" enctype="multipart/form-data">
            <h4>Product Name</h4>
            <input type="text"  placeholder="Product name" required name="pn">
            <h4>Price</h4>
            <input type="text"  name="price" placeholder="price" required>
            <h4>Image</h4>
            <input type="file"  name="file" placeholder="image" required>
            <h4>Description</h4>
            <textarea  name="description" placeholder="Desceiption"  ></textarea>
            <button type="submit" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Add</button>
            <button type="reset" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Reset</button>
        </form>
		
        <h3>Details Delete</h3>
		
		<form style="border:3px solid #2196F3; background-color:#B2EBF2" role="form" action="product_delete.php" method="POST" enctype="multipart/form-data">
            <h4 >Product Name</h4>
            <input type="text" placeholder="product name" required name="pn">
            <button type="submit" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Delete</button>
            <button type="reset" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Reset</button>
        </form>
                            
        <h3>Details Update</h3>            
		
		<form style="border:3px solid #2196F3; background-color:#80DEEA" role="form" action="product_update.php" method="POST" enctype="multipart/form-data">
            <h4>Product Name</h4>
            <input type="text"  placeholder="product name" required name="itemname">
            <h4>Rename Product Name</h4>
            <input type="text"  placeholder="product name" required name="pn">
            <h4>Price</h4>
            <input type="text" name="price" placeholder="price" required>
            <h4>Description</h4>
            <textarea  name="description" placeholder="Desceiption"  ></textarea>
            <button type="submit" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Update</button>
            <button type="reset" style="backgroung-color:#4caf50; color:green; padding:10px 15px; margin:8px 0; cursor:pointer">Reset</button>
        </form>
                                        
        <hr>
		<hr >  
		
		<button>
			<a href="#">Back to Top</a></p>
		</button>
        
		<p>KGD Hardware © 2017 </p>

    </body>
</html>