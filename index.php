<?php 
session_start();
include_once("config/conn.php");

if(isset($_POST['submit'])) {
 
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if(empty($user) || empty($pass)) {
    $message = 'All field are required';
    } else {
      $query = $pdo->prepare("SELECT * FROM staff_tbl WHERE 
      username=? AND password=? ");
      $query->execute(array($user,$pass));
      $row = $query->fetch(PDO::FETCH_BOTH);
      $access_level = $row['access_level'];
  
      if($query->rowCount() > 0) {
        $_SESSION['access_level'] = $access_level;
        $_SESSION['username'] = $user;
        header('location:Dashboard.php');
      } else {
        $message = 'Username/Password is wrong';
      }
    }
  
  }
	?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <script src="font-awesome/fontawesome-all.min.js"></script>
    <script src ="bootstrap4/js/bootstrap.js"></script>
    <script src ="bootstrap4/js/jquery.min.js"></script>
      <style>
    .bg{
        /* background-image:url(images/parking2.jpg); */
        background-repeat: no-repeat;
        background-size: cover;
        width:100%;
        height: 100vh;
    }
    .form-container{
        border: 0px solid white;
        padding: 50px 60px;
        margin-top: 15vh;
        -webkit-box-shadow: 1px 4px 26px 11px rgba(0,0,0,0.75);
        moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
        box-shadow: 1px 4px 26px 11px rgba(0,0,0,0.75);
        border-radius: 10px;
        background-color: #250033;
    
    }
   
    </style> 
</head>
<body>
    <div class="container-fluid bg">
       <div class="row">
         <div class="col-md-4 col-xs-12"></div>
         <div class="col-md-4 col-xs-12">
           <form action=""  method="POST"  class="form-container bg-light">
           <?php
              if(isset($message)){
                  echo '<div class="alert alert-danger">'.$message.'</div>'; 
                }
                ?>
              <h2 class="text-muted text-center">Login</h2>
             <div class="form-group">
                <label for="phone"><b> Phone number:</b></label>
                <input type="text" name="username" id="uname" class="form-control" placeholder="user name" require>
             </div>
             <div class="form-group">
                <label for="pass"><b>password:</b></label>
                <input type="password" name="password" id="pass" class="form-control" placeholder="password" require>
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary btn-block" name="submit">login</button>
             </div>
            
           </form>
         </div>
         <div class="col-md-4 col-xs-12"></div>
       </div>
    </div>
</body>
</html>