<?php
session_start();
$error = false;
$errorMsg = "";
include_once("config/conn.php");
// include_once("config/header.php");
if(isset($_POST['submit'])){
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $cpassword =$_POST['cpassword'];
    $uname = $_POST['uname'];
     if($cpassword!= $password){
         $_SESSION['fname'] = $fname;
         $_SESSION['lname'] = $lname;
         $_SESSION['phone'] = $phone;
         $_SESSION['email'] = $email;
         $_SESSION['uname'] = $uname;
        
         $error = true;
         $errormsg = "<div class ='alert alert-danger'>The two passwords does not match</div>";
     }else {
         $stmt =  $pdo->prepare('SELECT * FROM users WHERE email = :email');
         $stmt ->execute(['email'=>$email]);
         if($stmt->rowcount()>0){
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['phone'] = $phone;
            // $_SESSION['email'] = $email;
            $_SESSION['uname'] = $uname;
          
        $error = true;
        $errormsg = "<div class ='alert alert-danger'>This email is already taken</div>";
         }else {
             $pass = ($_POST['password']);
             $stmt = $pdo->prepare('INSERT INTO users (fname,lname,phone,email,password,uname)
              VALUES(:fname,:lname,:phone,:email,:password,:uname)');
              try {
                  $stmt->execute(['fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'email'=>$email,
                  'password'=>$pass,'uname'=>$uname]);
                  $error = true;
                  $errormsg = "<div class ='alert alert-success'>User verified</div>";
                  header('Location: login.php');
              } catch (PDOException $e) {
                  $errormsg = $e->getMessage();
              }
         }
     }
} else{
    $error = true;
    $errormsg = "<div class ='alert alert-danger'>All the field must be fill</div>";
}
// header('Location: login.php');




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <script src="font-awesome/fontawesome-all.min.js"></script>
    <script src ="bootstrap4/js/bootstrap.js"></script>
    <script src ="bootstrap4/js/jquery.min.js"></script>
    <style>
    .register{
        /* background-image:url(images/parking1.jpg); */
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        /* width:100%;
        height: 100vh; */
    } 
    .form-container{
        border: 0px solid white;
        padding: 50px 60px;
        margin-top: 10vh;
        margin-bottom:5vh;
        -webkit-box-shadow: 1px 4px 26px 11px rgba(0,0,0,0.75);
        moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
        box-shadow: 1px 4px 26px 11px rgba(0,0,0,0.75);
        border-radius: 15px;
        /* background-color: white; */
        opacity: 0.9;
    
    }
    /* .reg{
        background-color:rgba(0,0,0,0.5);
        border:  1px solid white;
        border-radius: 10px;
        margin-top:15vh;
   } */
   .form-control{
       background-color: transparent;
       
       
   }
   h2{
       color: white;
   }
  
  
   
    </style>
</head>
<body>
<div class="container-fluid">
       <div class="row register">
         <div class="col-md-4 col-xs-12"></div>
         <div class="col-md-4 reg">
           <form action="" method="post" class="form-container bg-light">
            
              <h2 class="text-muted text-center">Account Register</h2>
              <?php if(isset($error)){ echo $errorMsg; } ?>
             <div class="form-group">
                <!-- <label for="fname"><b>First Name:</b></label> -->
                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" require>
             </div>
             <div class="form-group">
                <!-- <label for="lname"><b>Last Name:</b></label> -->
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" require>
             </div>
             <div class="form-group">
                <!-- <label for="phone"><b>Phone Number:</b></label> -->
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" require>
             </div>
             <div class="form-group">
                <!-- <label for="email"><b>Email:</b></label> -->
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" require>
             </div>
             <div class="form-group">
                <!-- <label for="pass"><b>password:</b></label> -->
                <input type="password" name="password" id="pass" class="form-control" placeholder="password" require>
             </div>
             <div class="form-group">
                <!-- <label for="cpass"><b>comfirm password:</b></label> -->
                <input type="password" name="cpassword" id="cpass" class="form-control" placeholder="Comfirm password">
             </div>
             <div class="form-group">
                <!-- <label for="lname"><b>Last Name:</b></label> -->
                <input type="text" name="uname" id="uname" class="form-control" placeholder="User Name" require>
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-primary" name="submit">signup</button>
               <a href="login.php" class="btn btn-primary float-right">login</a>
             </div>
             
           </form>
         </div>
         <div class="col-md-4 col-xs-12"></div>
       </div>
    </div>
</body>
</html>