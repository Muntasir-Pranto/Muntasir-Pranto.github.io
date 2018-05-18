<?php

require 'db.php';
$sql="SELECT * FROM addpost";
$result= mysqli_query($connection, $sql);
//print_r($sql);
//$value=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" /><!--bootstrap-->
		<link rel="stylesheet" type="text/css" href="style3.css" media="all" /><!--css-->
    </head>
    <body>

	<header><!--header start-->
	<div class="container">
	<h1>All post are here!!</h1>
	
	<div class="nav">
		<ul>
		<li><a href="allpost.php">All post</a></li>
		<li><a href="addpost.php">Add post</a></li>
	</ul>
	</div>
	
	</div>
	
	</header><!--header end-->
	
	<section><!--section start-->
	<div class="container">
	<table class="table table-bordered">
	<tr>
	<th>ID</th>
	<th>Post title</th>
	<th>Post descripton</th>
	<th>Post catagory</th>
	<th>EDIT</th>
	<th>DELETE</th>
	</tr>
	
        <?php
        
        while ($value=mysqli_fetch_assoc($result)) {?>
        
        <tr>
	<td><?php echo $value['ID']?></td>
	<td><?php echo $value['post_title']?></td>
	<td><?php echo $value['post_desc']?></td>
	<td><?php echo $value['post_catagory']?></td>
	<td><a href=""class="btn btn-info btn-sm">EDIT</a></td>
	<td><a href=""class="btn btn-danger btn-sm">DELETE</a></td>
	
	
	</tr>
 
        
        
       <?php }?>
        
        

	</table>
	
	</div>
	
	</section><!--section end-->
	





	


	
	
        <?php
        // put your code here
        ?>
		
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!--bootstrap-->
		<script type="text/javascript"src="js/bootstrap.min.js"></script><!--bootstrap-->
    </body>
</html>