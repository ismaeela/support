<?php
 session_start();
 include_once("my_code.php");
include_once("config/conn.php");
 include_once("config/check_user.php");
 if(isset($_GET['id'])){
 $id = $_GET['id'];
 }
 //echo $_SESSION['phone'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>ALHAYA<span>MU</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="img/isah.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">         <?php echo $_SESSION['fname'];  echo $_SESSION['lname']; ?>
</h5>
          <li class="mt">
            <a  href="Dashboard.php"   data-toggle="tab">
              <i class="fa fa-dashboard"></i>
              <span>  Menus </span>
              </a>
          </li>
          <?php
            if($_SESSION['access_level']=='1' ) {
             
              echo '<li class="sub-menu">
                      <a href="javascript:;"><i class="fa fa-users"></i><span>Manage Attendant</span></a>
                        <ul class="sub">
                          <li><a href="#view_attendant" data-toggle="tab">View Attendants</a></li>
                          <li><a href="report.php" >Generate Report</a></li>
                          <li><a href="#income_report" data-toggle="tab">income Report</a></li>
                          
                        </ul>
                    </li>';
              echo '<li class="sub-menu">
                      <a href="javascript:;"><i class="fa fa-lock"></i><span>Change password</span></a>
                        <ul class="sub">             
                          <li><a href="#changepassword" data-toggle="tab">Change password</a></li>
                        </ul>
                    </li>';
            }else{
              echo '<li class="sub-menu">
                      <a href="javascript:;"><i class="fa fa-car"></i><span>Booking</span></a>
                        <ul class="sub">
                          <li><a href="#reserve_space" data-toggle="tab">Reserve Space</a></li>
                          <li><a href="#update_book" data-toggle="tab">Update Booking</a></li>
                          <li><a href="#print_reciept" data-toggle="tab">print Reciept</a></li>
                        </ul>
                    </li>';
              echo '<li class="sub-menu">
                      <a href="javascript:;"><i class="fa fa-lock"></i><span>Change password</span></a>
                        <ul class="sub">
                          <li><a href="#changepassword" data-toggle="tab">Change password</a></li>
                        </ul>
                    </li>';


            }
          ?> 

          
        
         
        

         

         
        
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-md-12">
          <div class="tab-content">
               <div class="tab-pane" id="dashboard">          
                     <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                           <div class="panel-header"></div>
                               <div class="panel panel-body">        
                                 <h3 class="panel-heading text-danger"><b> <?php// echo $_SESSION['uname']; ?>  DASHBOARD</b> </h3>
                               </div>
                               <h2 style="font-size: 20px; color:#250033;">YOU ARE WELCOME TO ALHAYAMU CAR PARKING. A DIVISION OF ALHAYAMU NIG. LTD</h2>
                                  <hr>
                           </div>
                     </div>
              
            
          
            
               <!-- <div class="tab-pane" id="reserve_space">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>Book a space</b></h3>
                    <?php if(isset($errormsg)){ echo $msg;}?>
                     <form action="script.php" method="post">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="fname"><b>First Name</b></label>
                              <input type="text" name="fname" id="fname" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="lname"><b>Last Name</b></label>
                              <input type="text" name="lname" id="lname" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="oname"><b>Other Name</b></label>
                              <input type="text" name="oname" id="oname" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="phone"><b>Phone Number</b></label>
                              <input type="tel" name="phone" id="phone" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="email"><b>Email</b></label>
                              <input type="email" name="email" id="email" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="address"><b>Address</b></label>
                              <input type="text" name="address" id="address" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for=""><b>Gender</b></label>
                              <select name="gender" id="" class="form-control">
                                <option value="hidden">--select Gender---</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="car"><b>Car Model</b></label>
                              <input type="text" name="car" id="car" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="pnumber"><b>Plate Number</b></label>
                              <input type="text" name="pnumber" id="pnumber" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for=""><b>Space</b></label>
                            <select name="space" id="" class="form-control">
                                <option value="hidden">--select space---</option>
                                <option value="A01">A01</option>
                                <option value="A02">A02</option>
                                <option value="A03">A03</option>
                                <option value="A04">A04</option>
                                <option value="B01">B01</option>
                                <option value="B02">B02</option>
                                <option value="B01">B03</option>
                                <option value="B02">B04</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="date"><b>Date</b></label>
                              <input type="date" name="date" id="date" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="time_in"><b>Time in</b></label>
                              <input type="time" name="timein" id="time_in" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="time_out"><b>Time Out</b></label>
                              <input type="time" name="timeout" id="time_out" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="charge"><b>Charge</b></label>
                              <input type="currency" name="charge" id="charge" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-center" name="save">save</button>
                          </div>
                        </div>
                    </form>
                     
                  </div>
              </div>  -->
              <!-- <div class="tab-pane" id="update_book">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>Update Booking</b></h3>                     
                        <form action="" method="post">
                        <?php 
                    try{
                     // $vp = $_SESSION['uname'];
                      $qry = "SELECT * FROM booking WHERE fname='".$_SESSION['uname']."'";
                      $results = $pdo->query($qry);
                     
                     
                    } catch(PDOException $e){
                      echo"error". $e->getMessage();
                      exit();
                    }
                ?>
                <?php if($results->rowcount()>0):?>
                <?php foreach($results as $rows):?>
               
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="pid"><b>Parking_id</b></label>
                                <input type="text" name="pid" id="pid" class="form-control" value="<?=$rows['parking_id']?>">
                            </div>
                          </div> 
                          
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="fname"><b>First Name</b></label>
                              <input type="text" name="fname" id="fname" class="form-control" value="<?=$rows['fname']?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="lname"><b>Last Name</b></label>
                              <input type="text" name="lname" id="lname" class="form-control" value="<?=$rows['lname']?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="oname"><b>Other Name</b></label>
                              <input type="text" name="oname" id="oname" class="form-control" value="<?=$rows['oname']?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="phone"><b>Phone Number</b></label>
                              <input type="tel" name="phone" id="phone" class="form-control" value="<?=$rows['phone']?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="email"><b>Email</b></label>
                              <input type="email" name="email" id="email" class="form-control" value="<?=$rows['email']?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="address"><b>Address</b></label>
                              <input type="text" name="address" id="address" class="form-control" value="<?=$rows['address']?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for=""><b>Gender</b></label>
                            <select name="gender" id="" class="form-control">
                                <option value="<?=$rows['gender']?>"><?=$rows['gender']?></option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="car"><b>Car Model</b></label>
                              <input type="text" name="car" id="car" class="form-control" value="<?=$rows['car']?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="pnumber"><b>Plate Number</b></label>
                              <input type="text" name="pnumber" id="pnumber" class="form-control" value="<?=$rows['pnumber']?>">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for=""><b>Space</b></label>
                            <select name="space" id="" class="form-control">
                                <option value="<?=$rows['space']?>"><?=$rows['oname']?></option>
                                <option value="A01">A01</option>
                                <option value="A02">A02</option>
                                <option value="A03">A03</option>
                                <option value="A04">A04</option>
                                <option value="B01">B01</option>
                                <option value="B02">B02</option>
                                <option value="B01">B03</option>
                                <option value="B02">B04</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="date"><b>Date</b></label>
                              <input type="date" name="date" id="date" class="form-control" value="<?=$rows['date']?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="time_in"><b>Time in</b></label>
                              <input type="time" name="timein" id="time_in" class="form-control" value="<?=$rows['time_in']?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="time_out"><b>Time Out</b></label>
                              <input type="time" name="timeout" id="time_out" class="form-control" value="<?=$rows['time_out']?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="charge"><b>Charge</b></label>
                              <input type="currency" name="charge" id="charge" class="form-control" value="<?=$rows['charge']?>">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-center mx-auto"name="update">update</button>
                          </div>
                        </div>
                        <?php endforeach ?>
                        <?php endif ?>
                      </form>                    
                  </div>
              </div>  -->
              
              <!-- <div class="tab-pane" id="changepassword">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>Change Password</b></h3>
                      
                     <form action="" method="post">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="crpass"><b>current Password</b></label>
                              <input type="password" name="crpassword" id="password" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="npass"><b>New Password</b></label>
                              <input type="password" name="npassword" id="npass" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="cnpass"><b>Comfirm Newpassword</b></label>
                              <input type="password" name="cnpassword" id="cnpassword" class="form-control">
                          </div>
                        </div>                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-center" name="reset">reset</button>
                          </div>
                        </div>
                    </form>
                     
                  </div>
              </div> 
              <div class="tab-pane" id="view_attendant">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>manage Attendant</b></h3>
                      
              <form action="" method="post">
              <hr>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <div class="form-group">                  
                    <input type="text" name="search1" id="search1" class="form-control" placeholder="Search">
                  </div>                 
                </div>
                <?php 
                    try{
                      $sql = "SELECT * FROM booking";
                      $result = $pdo->query($sql);
                    } catch(PDOException $e){
                      echo"error". $e->getMessage();
                      exit();
                    }
                ?>
                 
                <table class="table table-bordered table-striped table-condensed" id="booking">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>parking_id</th>
                      <th>Name</th>
                      <th>phone number</th>
                      <th>car's details</th>
                      <th>plate number</th>
                      <th>date</th>
                      <th>time_in</th>
                      <th>time_out</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($result->rowcount()>0):?>
                    <?php foreach($result as $row):?>
                    <tr>
                      <td><?=$row['id']?></td>
                      <td><?=$row['parking_id']?></td>
                      <td><?=$row['fname']." ".$row['lname']?></td>
                      <td><?=$row['phone']?></td>
                      <td><?=$row['car']?></td>
                      <td><?=$row['pnumber']?></td>
                      <td><?=$row['date']?></td>
                      <td><?=$row['time_in']?></td>
                      <td><?=$row['time_out']?></td>
                      <td>
                         <a href="update.php?id= '<?php echo $row['id']; ?> ?>'" class="btn btn-primary btn-sm">edit</a>|
                         <a href="#" class="btn btn-success btn-sm">print</a>|
                         <a href="#" class="btn btn-danger btn-sm">delete</a>
                      </td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif ?>
                  </tbody>
                </table>

             </form> -->
                     
                  </div>
              </div> 
              <div class="tab-pane" id="report">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>Generate report</b></h3>
                      
              <form action="" method="post">
              <hr>         
               
               <div class="col-md-6">
               <div class="form-group">
                 <label>From:</label>
                 <input type="date" name="from" class="form-control" placeholder="Search by date">
               </div>                 
               </div>
               <div class="col-md-6">
               <div class="form-group">
                 <label>To:</label>
                 <input type="date" name="to" class="form-control" placeholder="Search by date">
               </div>                 
               </div>
               <div class="col-md-3">
                <div class="form-group">
                  <button type="submit" class="btn btn-success" name="search">search</button>                  
                </div>                 
               </div>  
               <?php
                 if(isset($_POST['search'])){ 
                   $from =$_POST['from']; 
                   $to =$_POST['to'];
                   try{
                   $qry1 = "SELECT * from booking WHERE date BETWEEN '$from' and '$to'";
                   $isah = $pdo->query($qry1);          
                echo'<table id="example2" class="table table-bordered table-hover">
                <thead>              
                <tr>
                  <th>S/N</th>
                  <th>parking_id</th>
                  <th>Name</th>
                  <th>car</th>
                  <th>plate</th>
                  <th>Date</th>
                  <th>Time_in</th>
                  <th>Time_out</th>
                </tr>
                </thead>';             
                   foreach($isah as $zee){
                   echo'
                       <tr>
                         <td>'.$zee["id"].'</td>
                         <td>'.$zee["parking_id"].'</td>
                         <td>'.$zee["fname"].'</td>
                         <td>'.$zee["car"].'</td>
                         <td>'.$zee["pnumber"].'</td>
                         <td>'.$zee["date"].'</td>
                         <td>'.$zee["time_in"].'</td>
                         <td>'.$zee["time_out"].'</td>
                       </tr>';
                   }               
               echo'</table>';
                  } catch(PDOException $e){
                     $e->getMessage();
                  }
             }
              ?>  

             <!-- </form>
                     
                </div>
              </div> 
              <div class="tab-pane" id="income_report">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>income report</b></h3>
                      
              <form action="" method="post">
              <hr>          -->
              <!-- <?php  
                    // try{
                    //   $sql1 = "SELECT * FROM booking";
                    //   $result2 = $pdo->query($sql1);
                    //   $sum = 0;
                    // } catch(PDOException $e){
                    //   echo"error". $e->getMessage();
                    //   exit();
                    // }
                ?>
               
               
                <table id="example2" class="table table-bordered table-hover">
                <thead>              
                <tr>
                  <th>S/N</th>
                  <th>parking_id</th>
                  <th>owner</th>
                  <th>car's details</th>
                  <th>plate number</th>
                  <th>Date</th>
                  <th>Time_in</th>
                  <th>Time_out</th>
                  <th>charge</th>
                </tr>
                </thead>
                <tbody>
                <?php if($result2->rowcount()>0):?>
                <?php foreach($result2 as $row1):?>
                
                <tr>
                      <td><?=$row1['id']?></td>
                      <td><?=$row1['parking_id']?></td>
                      <td><?=$row1['fname']." ".$row['lname']?></td>                      
                      <td><?=$row1['car']?></td>
                      <td><?=$row1['pnumber']?></td>
                      <td><?=$row1['date']?></td>
                      <td><?=$row1['time_in']?></td>
                      <td><?=$row1['time_out']?></td>
                      <td><?=$row1['charge']?></td>                      
                    </tr>
                    <?php $sum = $sum + $row1['charge'];?>
                    <?php endforeach ?>
                    <?php endif ?>
                <tr>
                      <th colspan="9" align="center">Total Amount of income:<span>&#8358;</span><?= $sum;  ?></th>
                 </tr>
                </tbody>
                </table>
             </form>
                     
                </div>
              </div> 
              <div class="tab-pane" id="print_reciept">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>parking reciept</b></h3>
                      
              <form action="" method="post">
              <h4 class="text-center">AL HAYAMU NIGERIA LIMITED</h4>
              <h4 class="text-center">parking Ticket</h4>
              <hr>         
              <?php 
                    try{
                      $sqlt = "SELECT * FROM booking";
                      $result3 = $pdo->query($sqlt);
                      
                    } catch(PDOException $e){
                      echo"error". $e->getMessage();
                      exit();
                    }
                ?>
               
               
                <table id="example2" class="table table-striped">
                
                <tbody>
                <?php if($result3->rowcount()>0):?>
                <?php foreach($result3 as $row2):?>
                  <tbody>
						      <tr>
						        <td><b>Full Name</b></td>
						        <td><?php echo $row2['fname']." ".$row2['lname']; ?></td>
						      </tr>
						      <tr>
						        <td><b>parking id</b></td>
						        <td><?php echo $row2['parking_id']; ?></td>
						      </tr>
						      <tr>
						        <td><b>car</b></td>
						        <td><?php echo $row2['car']; ?></td>
						      </tr>
						      <tr>
						        <td><b>plate number</b></td>
						        <td><?php echo $row2['pnumber']; ?></td>
						      </tr>
						      <tr>
						        <td><b>Date</b></td>
						        <td><?php echo $row2['date']; ?></td>
						      </tr>
						      <tr>
						        <td><b>time in</b></td>
						        <td><?php echo $row2['time_in']; ?></td>
						      </tr>
						      <tr>
						        <td><b>time out</b></td>
						        <td><?php echo $row2['time_out']; ?></td>
						      </tr>
						      <tr>
						        <td><b>charge</b></td>
						        <td><?php echo $row2['charge']; ?></td>
                    <?php endforeach ?>
                    <?php endif ?>
						      </tr>
						    </tbody>
						  </table>
              <div class="form-group">
						  	<a href="#print" class="btn btn-default btn-sm pull-right" target="_blank">Print Ticket</a>
						  </div>
              
              
             </form>
                     
                </div>
              </div> 
              <div class="tab-pane" id="print">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>print reciept</b></h3>
                      
              <form action="" method="post">
              <h4 class="text-center">AL HAYAMU NIGERIA LIMITED</h4>
              <h4 class="text-center">print Ticket</h4>
              <hr>         
              <?php 
                    try{
                      $sqlt = "SELECT * FROM booking";
                      $result3 = $pdo->query($sqlt);
                      
                    } catch(PDOException $e){
                      echo"error". $e->getMessage();
                      exit();
                    }
                ?>
               
               
                <table id="example2" class="table table-striped">
                
                <tbody>
                <?php if($result3->rowcount()>0):?>
                <?php foreach($result3 as $row2):?>
                  <tbody>
						      <tr>
						        <td><b>Full Name</b></td>
						        <td><?php echo $row2['fname']." ".$row2['lname']; ?></td>
						      </tr>
						      <tr>
						        <td><b>parking id</b></td>
						        <td><?php echo $row2['parking_id']; ?></td>
						      </tr>
						      <tr>
						        <td><b>car</b></td>
						        <td><?php echo $row2['car']; ?></td>
						      </tr>
						      <tr>
						        <td><b>plate number</b></td>
						        <td><?php echo $row2['pnumber']; ?></td>
						      </tr>
						      <tr>
						        <td><b>Date</b></td>
						        <td><?php echo $row2['date']; ?></td>
						      </tr>
						      <tr>
						        <td><b>time in</b></td>
						        <td><?php echo $row2['time_in']; ?></td>
						      </tr>
						      <tr>
						        <td><b>time out</b></td>
						        <td><?php echo $row2['time_out']; ?></td>
						      </tr>
						      <tr>
						        <td><b>charge</b></td>
						        <td><?php echo $row2['charge']; ?></td>
                    <!-- <?php endforeach ?>
                    <?php endif ?>
						      </tr>
						    </tbody>
						  </table> -->
              <!-- <div class="form-group">
						  	<input type="submit" class="btn btn-default btn-sm pull-right" value="Print" onclick="window.print()"></a>
						  </div>
               -->
              
             </form>
                     
                </div>
              </div> 
            </div>
           </div>
         </div>
        </div>
       </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <!-- <footer class="site-footer">
      <!-- <div class="text-center">
        <p>
          &copy; Copyrights <strong>Alhayamu</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          <!-- Created and Developed by <a href="#">Isah muhammad</a> -->
        </div>
        <!-- <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a> -->
      </div> -->
    <!-- </footer> --> -->
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    // $(document).ready(function() {
    //   var unique_id = $.gritter.add({
    //     // (string | mandatory) the heading of the notification
    //     title: 'Welcome to Dashio!',
    //     // (string | mandatory) the text inside the notification
    //     text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
    //     // (string | optional) the image to display on the left
    //     image: 'img/ui-sam.jpg',
    //     // (bool | optional) if you want it to fade out on its own or just sit there
    //     sticky: false,
    //     // (int | optional) the time you want it to be alive for before fading out
    //     time: 8000,
    //     // (string | optional) the class name you want to apply to that specific message
    //     class_name: 'my-sticky-class'
    //   });

    //   return false;
    // });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#search1').keyup(function(){
        search_table($(this).val());
      });
      function search_table(value){
        $('#booking tr').each(function(){
          var found = 'false';
          $(this).each(function(){
            if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
            {
              found = 'true';
            }
          });
          if(found=='true'){
            $(this).show();
          }
          else{
            $(this).hide();
          }
        });
      }
    });
  </script>
</body>

</html>
