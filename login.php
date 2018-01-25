<?php
session_start();


?>
<form  action="" method="post" class="form-inline inset"  style="margin-top: 0.5em; margin-bottom: 0.5em;">
		               <div class="form-group col-lg-2" style="margin-top: 0.5em;margin-left: 46%;">
		               		<label for="inputuser"> Email Id </label>
			                <input  class="form-control" type="text" placeholder="Email id" name="emailid" required /> 

		               </div>
		               <div class="form-group col-lg-2" style="margin-top: 0.5em;margin-left: 3%;">
			  		    	 <label for="password"> Password </label>
		     			     <input class="form-control" type="password" placeholder="Password" name="password" required /> 
		     		   </div>
		     		   <div class="form-group col-lg-2" style="margin-top: 0.5em;margin-left: 10px;">
			           		 <br/ >
		     			     <button  class="btn btn default" type="submit" name="login" style="margin-top: 0.4em;margin-left: 15%;"> Login </button>		         		         			       
		    		   </div>
		   				  	   
		            </form>   
		            <?php

		            

            
             if(isset($_POST["login"])){
             
              $res=mysqli_query($link,"select * from user where email_id='$_POST[emailid]' && password='$_POST[password]'");

      			
      			
              
              while($row=mysqli_fetch_array($res)){

        
            
             
             $_SESSION['name']=$row["name"];
              echo $_SESSION['name'];
             
            $_SESSION['emailid']=$_POST[emailid];

            $online=mysqli_query($link,"update user set online='1' where email_id='$_POST[emailid]'");

             header("Location: homepage.php ");
            }
        
  }
  ?>
		            
		 	

		 </div>