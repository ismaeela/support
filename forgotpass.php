<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>forgot pass</title>
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
        background-color:
        
    
    }
   
    </style>
</head>
<body>
    <div class="container-fluid bg">
       <div class="row">
         <div class="col-md-3 col-xs-12"></div>
         <div class="col-md-6 col-xs-12">
           <form action="" method="post" class="form-container bg-light">
              <h2 class="text-muted text-center mb-2">Forgot Password</h2>
             <div class="form-group">
                <label for="email"><b>Enter Your Email To Reset Your Password:</b></label>
                <input type="email" name="email" id="email" class="form-control">
             </div>
             
             <div class="form-group">
               <button type="submit" class="btn btn-primary btn-block" name="submit">Reset</button>
             </div>
            
           </form>
         </div>
         <div class="col-md-3 col-xs-12"></div>
       </div>
    </div>
</body>
</html>