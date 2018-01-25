


<?php
	session_start();
	
	$name=$_SESSION['name'];
	$email= $_SESSION['emailid'];
  $name=$_SESSION['name'];
  if ($email == "" && $name == "") {

    header("Location: index.php ");
  }


	

?>

<?php
  $link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"registration");
?>



<!DOCTYPE html>
<html>
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
	     			$res=mysqli_query($link,"select * from user where online='1'");
	     			while($row=mysqli_fetch_array($res))
	     			{
	     				echo $row['name']."<div style='background-color:green;width:10px;height:10px;'></div><br/>";
	     			}
	     			$res1=mysqli_query($link,"select * from user where online='o'");
	     			while($row=mysqli_fetch_array($res1))
	     			{
	     				echo $row['name']."<div style='background-color:red;width:10px;height:10px;'></div><br/>";
	     			}

     		?>

     	</div>
     	
 </div>    		

</body>
</html>