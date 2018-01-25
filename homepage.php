<?php
  session_start();
  $email= $_SESSION['emailid'];
  $name=$_SESSION['name'];
  if ($email == "" && $name == "") {

    header("Location: index.php ");
  }


  
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"registration");
?>
<!DOCTYPE html>
<html>
<head>

  <title> Welcome Home Page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>

  <style> 
.search {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.search:focus {
    width: 40%;
}
</style>
</head>
<body ng-app="mymodule">
  <div class="jumbotron" style="width: 100%; height: 900px; " >

     <div class="row " style="background-color: #4ADCE8;width: 100%; height: 110px; " >
        <form  action="" method="post" class="form-inline inset"  style="margin-top: 0.5em; margin-bottom: 0.5em;">
                   <div class="form-group col-lg-2" style="margin-top: 0.5em;margin-left: 5%;">
                           <h2 > WELCOME <br><?php echo $name; ?> </h2>
                   </div>
                  <br/>
                <ul class="nav nav-tabs" role="tablist" style="margin-top: 0.5em;margin-left: 50%;">
                    <li class="active"><a href="#">Home</a></li>
                     <li><a href="profile.php"> Profile </a></li>
                     <li><a href="online.php"> Online </a></li>
                     <li><a href="logout.php"> Logout </a></li>
        </form>
                   <div>
                     <form action="" method="post">
                        <input type="text" class="search"  name="search" placeholder="Search..">
                     </form>
                      <?php 
               if(isset($_POST["search"])){

                $_SESSION['search']=$_POST["search"];
                
                header("Location: search.php ");
            
                
               }


            ?>
                   </div>
        

                </ul>
       </div>       
 
 
 
<div ng-view >

  
  
</div>

<script >
  var app=angular.module("mymodule",["ngRoute"])
          .config(function($routeProvider){
            $routeProvider
             .when("/profile",{
              templateUrl:"profile.php" ,
              controller:"myctrdas"
             })
             .when("/online",{
              templateUrl:"online.php" ,
              controller:"myctrdas"
             });

  });
     
</script>
 
</body>
</html>