<?php
require"db.php";

if(isset($_POST['submit'])){
  $post_title=$_POST['title'];
$post_desc=$_POST['description'];
$post_catagory=$_POST['catagory']; 

$query="INSERT INTO addpost(post_title,post_desc,post_catagory) values('$post_title','$post_desc','$post_catagory')";

$sql= mysqli_query($connection, $query);
header("location:addpost.php");

if($sql){
   $message="DATA INSERTED SUCCESSFULLY!!";
   return $message;
  
   
           
}
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" /><!--bootstrap-->
		<link rel="stylesheet" type="text/css" href="style4.css" media="all" /><!--css-->
    </head>
    <body>

	<header><!--header start-->
	<div class="container">
	<h1>Add post here!!</h1>
	
	<div class="nav">
		<ul>
		<li><a href="allpost.php">All post</a></li>
		<li><a href="addpost.php">Add post</a></li>
	</ul>
	</div>
	
	</div>
	
	</header><!--header end-->
	
	<section><!--section start-->
	<div class="col-md-6 col-md-offset-3">
	<form action="" method="post">
	<div class="form-group">
	<input type="text"class="form-control"placeholder="Post title"name="title"required />
	</div>
	
	<div class="form-group">
	<textarea name="description"cols="30" rows="10"placeholder="Post description"class="form-control"required></textarea>
	</div>
	
	<div class="form-group">
	<input type="text"class="form-control"placeholder="Post Catagory"name="catagory"required />
	</div>
            <input type="submit"name="submit"class="form-control btn btn-success"value="Add post" />
	
	
	
	
	
	
	</form>
	</div>

	
	</section><!--section end-->
	


	
	
        <?php
        // put your code here
        ?>
		
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!--bootstrap-->
		<script type="text/javascript"src="js/bootstrap.min.js"></script><!--bootstrap-->
    </body>
</html>