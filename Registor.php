
<div class="row" style="background-color:;width: 100%; height: 800px; ">
      <div >
          <h2> New User </h2>
          <form class="col-lg-6 " action="" method="post" name="form1" style="margin-top: 1em; margin-bottom: 1em;">
              <div class="form-group">
                     <label for="name"> Name </label>
                 <input type="text" class="form-control" id="name1" placeholder="Name" name="name" required>
                </div>
                <div class="form-group">
                   <label for="email"> Email </label>
                 <input type="email" class="form-control" id="email1" placeholder="Email" name="email" required>
              </div>
              <div class="form-group">
                   <label for="address"> Present Address </label>
                   <textarea class="form-control" rows="2" id="comment" name="address"></textarea>
              </div>
              <div class="form-group">
                 <label for="pwd">Password:</label>
                 <input type="password" class="form-control" id="pwd1" placeholder="Password" name="password" required>
              </div>
              <div class="form-group btn btn-success" >
                <button type="submit"  class="btn btn-success"  name="register"> Register </button>
              </div>


          </form>


    

    <?php
      if(isset($_POST["register"])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phoneno=$_POST['address'];
      $password=$_POST['password'];
      
      echo '<script language="javascript">';
      echo 'alert(" Data has been successfully created")';
      echo '</script>';
      $e="0";
      mysqli_query($link,"insert into user values ('','$_POST[name]','$_POST[email]','$_POST[address]','$_POST[password]','$e')");
    }

   ?>
        

      </div>
        
      
  </div>
  
</div>


</body>
</html>


    