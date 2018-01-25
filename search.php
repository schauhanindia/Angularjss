

<?php
	session_start();
	$search= $_SESSION['search'];
	$name=$_SESSION['name'];
    if ($search == "" && $name == "") {

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
     		
            <table width="600" border="1" cellpadding="1" cellspacing="1">
                <tr style='background-color: pink;'>
                    <th> Name </th>
                    <th> Hobby </th>
                    <th> Date of Birth </th>
                </tr>

            <?php  		

     		 $res=mysqli_query($link,"select * from image where  date_of_birth LIKE '%search%' OR name LIKE '%$search%' OR hobby LIKE '%$search%'  ");
     		 $count=mysqli_num_rows($res);
     		 if($count==0){  
     		 	echo " <tr><td><h3>There is no Search Result! </h3></td></tr>" ; 		 	
     		 
     		}
     		else{     		
     		
     		while($row=mysqli_fetch_array($res)){
     		 echo "<tr style='background-color: #f1f1c1;'>";
             echo "<td>".$row['name']."</td>";
             echo "<td>".$row['hobby']."</td>";
             echo "<td>".$row['date_of_birth']."</td>";
             echo "</tr>";

     		 }
     		}

     		 ?>
             </table>
     	</div>
     	
 </div>    		

</body>
</html>