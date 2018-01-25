<?php
	session_start();
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


	<div class="jumbotron" style="width: 100%; height: 800px; ">
     	<div class="container">
     		<h2> Profile </h2>
     		<form action="" method="post" enctype="multipart/form-data">
 		       <div class="form-inline">
                 <label for="usr"> Upload Image </label><br/>
                 <div style="border-style: dotted;width: 110px;height: 110px;">
                 		<?php
	if(isset($_POST["submit1"])){
		$v1=rand(1111,9999);
		$v2=rand(1111,9999);
		$v3=$v1.$v2;
		$v3=md5($v3);
	 $fnm=$_FILES["file1"]["name"];
	 $dst="./images/".$v3.$fnm;
	 $dst1="images/".$v3.$fnm;
	 $img=move_uploaded_file($_FILES["file1"]["tmp_name"],$dst);

	 
	 mysqli_query($link,"insert into upload values('','$dst1')");
	
	
	 $sql="select image from upload order by id desc limit 1 ";
	 $res1=mysqli_query($link,$sql);
	 while($row=mysqli_fetch_array($res1)){
	 	$path=$row['image'];
	 	
	 	

	 	echo "<img src='$path' height='100' width='100'>";
	  }

	 
	}
	
	
	?>		
                 </div>
                 <input type="file" class="form-control" id="usr" value="Upload image " name="file1">
                 <input type="submit" name="submit1" value="Upload image " />
       
               </div>
               <div class="form-group"><br/>
               <label for="inputuser"> Email Id </label>
                      <input  class="form-control" type="text" placeholder="name" name="name" disabled="" value="<?php echo $name; ?>" /> 

                      </div>
               <div class="form-group"><br/>
               <label for="inputuser"> Email Id </label>
			                <input  class="form-control" type="text" placeholder="Email id" name="emailid" disabled="" value="<?php echo $email; ?>" /> 

			                </div>
        <div class="form-group"><br/>
         <label for="comment"> Short Bio </label>
         <textarea class="form-control" rows="2" id="comment" name="shortbio"></textarea>
         </div>

        <div class="form-group">
          <label>Date of Birth</label>
          <input type="date" class="form-control" name="dob" id="exampleInputDOB1" placeholder="Date of Birth">

        </div>
        <div>
      	<label>Hobby </label><br>
      	  <label class="checkbox-inline">
             <input type="checkbox" value="Chess" name="hobby[]">Chess
         </label>
         <label class="checkbox-inline">
             <input type="checkbox" value="Badminton" name="hobby[]">Badminton
        </label>
        <label class="checkbox-inline">
             <input type="checkbox" value="Cricket" name="hobby[]">Cricket
       </label>
      </div>

      <div><br>
      	<label for="sel1">Relationship</label>
           <select class="form-control" id="sel1" name="relationship">
             <option value="UnMarried">UnMarried</option>
             <option value="Married">Married</option>
             <option value="Complicated">Complicated</option>
             <option value="Singles">Single</option>
           </select>
      </div>
      <div class="form-group " ">
			           		 <br/ >
		     			     <button  class="btn btn default" type="submit" name="update"> Update 	</button>		         		         			       
		    		   </div>
   </form>
     	</div>

     	<?php
      if(isset($_POST["update"])){
    
      $shortbio=$_POST['shortbio'];
      $dob=$_POST['dob'];
      $r=$_POST["hobby"];
      $a=implode(",",$r);

      $relationship=$_POST['relationship'];

      
      
      echo '<script language="javascript">';
      echo 'alert(" Data has been Successfully Updated ")';
      echo '</script>';
      mysqli_query($link,"insert into image values ('','$name','$email','$_POST[shortbio]','$_POST[dob]','$a','$_POST[relationship]')");


    }

   ?>
  


    </div>

</body>
</html>