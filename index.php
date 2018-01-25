<?php
session_start();


?>
<?php 
  include "connection.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title> Grandappstudio </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>

  

</head>
<body ng-app="mymodule">
 
<div class="container">
  <div class="jumbotron" ng-controller="myctr">
    <div class="row " style="background-color: #4ADCE8;width: 100%; height: 100px; " ng-include="'login.php'">

    </div>
    <div class="row" style="background-color:;width: 100%; height: 800px;" ng-include="'Registor.php'">
    </div>
  </div>
</div>      
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
<script >    
  var app=angular.module('mymodule',[]);
  app.controller('myctr',function($scope){ });
</script>

</body>
</html>




