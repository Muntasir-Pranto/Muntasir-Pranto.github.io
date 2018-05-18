
<?php
require 'db.php';
$id=$_GET['id'];
$query="SELECT * FROM addpost WHERE id='$id'";
$result=mysqli_query($connection, $query);

$value= mysqli_fetch_assoc($result);

//print_r($value);

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
		<link rel="stylesheet" type="text/css" href="style2.css" media="all" /><!--css-->
    </head>
    <body>
	<header><!--header start-->
	<div class="content">
	<!--<div class="row">-->
	<div class="col-md-6 col-md-offset-4">
	<div class="img">
	<img src="img/image1.PNG" class="img-responsive "alt="" />
	</div>
	
	
	<!--</div>-->
	
	<!--<div class="col-md-6">-->
	<div class="desc">
            <h1><?Php echo $value['post_title'];?></h1>
	    <p><?Php echo $value['post_desc'];?></p>
	
	</div>
	
	<!--</div>-->
	<!--</div>-->
	
	
	</div>
	</div>

	
	</footer><!--footer end-->
        <?php
        // put your code here
        ?>
		
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!--bootstrap-->
		<script type="text/javascript"src="js/bootstrap.min.js"></script><!--bootstrap-->
    </body>
</html>