<?php 
session_start();
include_once("config/conn.php");
// include_once("config/check_user.php
// if(isset($_POST['submit']) {
// $uname = $_POST['uname'];
// $password =trim($_POST['pswd']);


//   try {
//     $query = "SELECT * FROM staff_tbl WHERE username = :uname AND password = :pswd";
//     $bind = $pdo->prepare($query);
//     $bind->bindParam(':uname', $uname, PDO::PARAM_STR);
//     $bind->bindParam(':password', $password, PDO::PARAM_STR);
   
//     $bind->execute();     
//     $stmt = $bind->fetchAll();
//     if(count($stmt) > 0){
//            $_SESSION['uname']=$uname = $stmt[0]['uname']; 
//           // $_SESSION['fname']=$uname = $stmt[0]['fname'];
//           // $_SESSION['lname']=$uname = $stmt[0]['lname'];
//           $_SESSION['access_level']=$access = $stmt[0]['access_level'];



//     }
//     $count = $bind->rowcount();

//    header("location:Dashboard.php");

      
// } catch (PDOException $e) {
//   echo "Error : ".$e->getMessage();
//   }

//  }
$message ="";
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
  
  if($query->rowCount() > 0) {
    $_SESSION['username'] = $user;
   // echo $user; exit;
    header('location:Dashboard.php');
  } else {
    $message = '<div class = "alert alert-danger">Username/Password is wrong</div>';
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
            
      
                 '<<?php echo $message; ?>
              
            
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
             <div class="form-group">
              <span class="text-center text-primary"><a href="forgotpass.php"><b>Forgot password?</b></a></span>
             </div>
             <div class="form-group">
             <span class="text-center"><b>Are you new to the site?</b> <a href="signup.php"><b>register</b></a></span>
             </div>
           </form>
         </div>
         <div class="col-md-4 col-xs-12"></div>
       </div>
    </div>
</body>
</html>