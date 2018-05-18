<?php
require 'db.php';
$query="SELECT * FROM addpost";
$result=mysqli_query($connection, $query);

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
		<link rel="stylesheet" type="text/css" href="style.css" media="all" /><!--css-->
    </head>
    <body>
	<header><!--header start-->
	
	<div class="container">
	<div class="row">
	
	<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
	<div class="logo">
	<img src="img/logo.PNG" alt="" />
	</div>
	
	</div>
	
	<div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">
	<div class="nav">
            <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Blog</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
            </ul>

	</div>

	
	</div>
	
	</div>
	</div>

	</header><!--header end-->
	
	<footer><!--footer start-->
	<div class="container">
		<div class="row">
	<div class="col-md-10">
	          <?php
        
        while ($value=mysqli_fetch_assoc($result)) {?>
            
	<div class="content">
	<div class="row">
	<div class="col-md-6">
	<div class="img">
	<img src="img/image1.PNG" class="img-responsive "alt="" />
	</div>
	
	
	</div>
	
	<div class="col-md-6">
	<div class="desc">
	<h1><?php echo $value['post_title']?></h1>
	<p><?php echo $value['post_desc']?></p>
	<a class="btn btn-info" href="single.php?id=<?php echo $value['ID'];?>">Read more</a>
	</div>
	
	</div>
	</div>
	
	
	</div>
        <?php }?>
	

	</div>
	

	<div class="col-md-2">
	<div class="sidebar">
	<img src="img/sidebar.PNG"class="img-responsive" alt="" />
	<img src="img/sidebar.PNG"class="img-responsive" alt="" />
	<img src="img/sidebar.PNG"class="img-responsive" alt="" />
	<img src="img/sidebar.PNG"class="img-responsive" alt="" />
	<img src="img/sidebar.PNG"class="img-responsive" alt="" />
	<img src="img/sidebar.PNG"class="img-responsive" alt="" />
	<img src="img/sidebar.PNG"class="img-responsive" alt="" />
	
	</div>
	

	</div>

	</div>
	
	</div>


	
	</footer><!--footer end-->

		
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!--bootstrap-->
		<script type="text/javascript"src="js/bootstrap.min.js"></script><!--bootstrap-->
    </body>
</html>
