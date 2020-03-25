<?php
 session_start();
 include_once("my_code.php");
include_once("config/conn.php");
 include_once("config/check_user.php");
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "isah";
 
 // Create connection
 $con2 = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($con2->connect_error) {
     die("Connection failed: " . $con2->connect_error);
 }
 
                     if(isset($_GET['id'])){
                           $id = $_GET['id'];
 
                           $sql = "SELECT * from booking where id=$id";
                           $result = $con2->query($sql);
                           if($result->num_rows>0){
                               while($row = $result->fetch_array()){
                                  // echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
                                  
                                  $parking=$row["parking_id"];
                                  $fname=$row["fname"];
                                  $lname=$row["lname"];
                                  // $oname=$row["oname"];
                                  $phone=$row["phone"];
                                  // $email=$row["email"];
                                  // $address=$row["address"];
                                  // $gender=$row["gender"];
                                  $car=$row["car"];
                                  $pnumber=$row["pnumber"];
                                  // $space=$row["space"];
                                  $date=$row["date"];
                                  $time_in=$row["time_in"];
                                  $time_out=$row["time_out"];
                                  $charge=$row["charge"];
                               }
                             }
                           }
                               $con2->close();
                               
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
            <a  href="dashboard.php" class=""  data-toggle="tab">
              <i class="fa fa-dashboard"></i>
              <span>  Menus </span>
              </a>
          </li>
          <?php
            if($_SESSION['access_level']=='1' ) {
              echo '<li class="sub-menu">
                      <a> <i class="fa fa-users"></i><span>Attendant</span> </a>
                      <ul class="sub">
                        <li><a href="#reserve_space" data-toggle="tab">Add Attendant</a></li>
                      </ul>
                    </li>';
              echo '<li class="sub-menu">
                      <a href="javascript:;"><i class="fa fa-users"></i><span>Manage Attendant</span></a>
                        <ul class="sub">
                          <li><a href="#view_attendant" data-toggle="tab">View Attendants</a></li>
                          <li><a href="report.php">Generate Report</a></li>
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
               <!-- <div class="tab-pane " id="dashboard">          
                     <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                           <div class="panel-header"></div>
                               <div class="panel panel-body">        
                                 <h3 class="panel-heading text-danger"><b> <?php// echo $_SESSION['uname']; ?>  DASHBOARD</b> </h3>
                               </div>
                               <h2 style="font-size: 20px; color:#250033;">YOU ARE WELCOME TO ALHAYAMU CAR PARKING. A DIVISION OF ALHAYAMU NIG. LTD</h2>
                                  <hr>
                           </div>
                     </div> -->
              
            
          
            
              
              
              
              <div class="tab" id="print">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>parking reciept</b></h3>
                      
              <form action="" method="post">
              <h4 class="text-center">AL HAYAMU NIGERIA LIMITED</h4>
              <h4 class="text-center">parking Ticket</h4>
              <hr>         
             
               
               
                <table id="example2" class="table table-striped">
                
                <tbody>
               
                  <tbody>
						      <tr>
						        <td><b>Full Name</b></td>
						        <td><?php echo $fname." ".$lname; ?></td>
						      </tr>
						      <tr>
						        <td><b>parking id</b></td>
						        <td><?php echo  $parking; ?></td>
						      </tr>
						      <tr>
						        <td><b>car</b></td>
						        <td><?php echo $car; ?></td>
						      </tr>
						      <tr>
						        <td><b>plate number</b></td>
						        <td><?php echo $pnumber; ?></td>
						      </tr>
						      <tr>
						        <td><b>Date</b></td>
						        <td><?php echo $date; ?></td>
						      </tr>
						      <tr>
						        <td><b>time in</b></td>
						        <td><?php echo $time_in; ?></td>
						      </tr>
						      <tr>
						        <td><b>time out</b></td>
						        <td><?php echo $time_out; ?></td>
						      </tr>
						      <tr>
						        <td><b>charge</b></td>
						        <td><?php echo $charge; ?></td>
                   
						      </tr>
						    </tbody>
						  </table>
                          <div class="form-group">
						  	<input type="submit" class="btn btn-default btn-sm pull-right" value="Print" onclick="printContent('print')"></a>
						  </div>
              
              
             </form>
                     
                </div>
              </div> 
              <!-- <div class="tab-pane" id="print">
                  <div class="panel panel-body" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                    <h3 class="panel-heading text-danger"><b>print reciept</b></h3>
                      
              <form action="" method="post">
              <h4 class="text-center">AL HAYAMU NIGERIA LIMITED</h4>
              <h4 class="text-center">print Ticket</h4>
              <hr>         
             
               
               
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
						  	<input type="submit" class="btn btn-default btn-sm pull-right" value="Print" onclick="window.print()"></a>
						  </div>
              
              
             </form>
                     
                </div>
              </div>  -->
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
  <script>
  function printContent(e1){
      var restorepage = document.body.innerHTML;
      var printContent = document.getElementById(e1).innerHTML;
      document.body.innerHTML = printContent;
      window.print();
  }
  </script>
</body>

</html>
