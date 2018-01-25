<?php 
	session_start();
	$email=$_SESSION['emailid'];
	
?>
<?php
  $link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"registration");
?>
<head>
	<title> Grandappstudio </title>
</head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
<div class="jumbotron" style="width: 100%; height: 800px; ">
     	<div class="container">

     		<?php
     				mysqli_query($link,"update user set online='0' where email_id='$email'");
     				session_destroy();

	     			header("Location: index.php");
	     			exit();
     		?>

     	</div>
     	
 </div>    		

</body>
</html>
