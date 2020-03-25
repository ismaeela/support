<?php
session_start();

    include ('connk.php');
    
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT  email,password FROM admin WHERE email = :email AND password = :password";
		$bind = $pdo->prepare($query);
		$bind->bindParam(':email', $email, PDO::PARAM_STR);
		$bind->bindParam(':password', $password, PDO::PARAM_STR);
		$bind->execute();
        $stmt = $bind->fetchAll(PDO::FETCH_OBJ);
        

        $query1 = "SELECT  email,password FROM registration WHERE email = :email AND password = :password";
		$bind1 = $pdo->prepare($query1);
		$bind1->bindParam(':email', $email, PDO::PARAM_STR);
		$bind1->bindParam(':password', $password, PDO::PARAM_STR);
        $bind1->execute();     
        $stmt1 = $bind1->fetchAll(PDO::FETCH_OBJ);
        

        if ($stmt) {
            if ($bind->rowCount() > 0) {
                session_start();
                $_SESSION['alogin'] = $_POST['email'];
                $_SESSION['employee']   ="";
                //$_SESSION['alogin'] = $_POST['password'];
               // $_SESSION["loggedin"] = true;
                    header("location:send_notification.php");
            }else{
                echo "<script>              
                alert('Invalid details');
                </script>";
            }
        }elseif($stmt1){
            if ($bind1->rowCount() > 0) {
                // session_start();
                $_SESSION['staff'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                //$_SESSION["loggedin"] = true;
                //$_SESSION['alogin'] = $_POST['password'];
                    header("location:profile.php");
            }else{
                echo "<script>
                
                alert('Invalid details');
                </script>";
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
    <title>Crime System</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <script src="font-awesome/fontawesome-all.min.js"></script>
    <script src ="bootstrap4/js/bootstrap.js"></script>

</head>
<body>

    <div class="container">
    
        <h1 class="text-center" style="margin-top:30px;">Account Login</h1>
        <hr>
        <!-- The first row div -->

        <div class="row justify-content-md-center">
            <div class="col-md-5">

            
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign in your Account</h5>
                        <hr>
                        <form action="account_login.php" method="POST">
                            <div class="form-group row">
                                <label class="col-3 col-form-label"for="email">Email</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" name="email"  require>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label"for="password">Password</label>
                                <div class="col-9">
                                    <input type="password" name="password"  class="form-control"  >
                                </div>
                            </div>

                            <hr>
                            <div>
                                <button type="submit" class="btn btn-default" name="submit">Login</button>
                                <a href="user_register.php">Register a new Account</a>
                            </div>

                      
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- end of row div -->
        
    </div>
</body>
</html>