<?php
 session_start();
        function __autoload($class){
            $myClass="support_methods.php";
            include_once("$myClass");
        }

        $obj = new mains_methods();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Briatek Computers Nig Ltd.</title>

  <!-- Favicons -->
  <link href="img/pic.jpg" rel="icon">
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
  <style>
    label{
      color:black;
    }
  </style>
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
      <a href="#" class="logo"><b>BRIA<span>TEK</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
  <?php include 'config/aside.php'; ?>
         
        
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
        <form>
        <div class="row">
          <div class="col-md-12">
          <div class="tab-content">
               <div class="tab-pane active" id="dashboard">          
                     <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                           <div class="panel-header"></div>
                               <div class="panel panel-body">        
                                 <h3 class="panel-heading text-danger"><b> <?php// echo $_SESSION['uname']; ?>  DASHBOARD</b> </h3>
                               </div>
                               <h2 style="font-size: 20px; color:#250033;">YOU ARE WELCOME TO BRIATEK COMPUTERS NIG.LTD</h2>
                                  <hr>
                           </div>
                     </div> 
                    
                     <div class="tab-pane" id="assign_issues">          
                     <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                           <div class="panel-header"></div>
                               <div class="panel panel-body">  
                                 <form method="POST" >      
                                 <h3 class="panel-heading text-danger"><b> <?php// echo $_SESSION['uname']; ?>  Assign Duties</b> </h3>
                                 <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Client's Name:</b></label>
                                      <!-- //<input type="text" name ="C_name" class="form-control"> -->
                                      <select class="form-control" name = "client's_name">
                                        <option></option>
                                      </select>
                                  </div>
                                  </div>
                                  <div class="col-lg-4">
                                     <div class="form-group">
                                      <label><b>Subject:</b></label>
                                      <input type="text" name ="C_chanel" class="form-control">
                                  </div>
                                  </div>
                                  <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Sender ID:</b></label>
                                      <input type="text" name ="sender_id" class="form-control">
                                  </div>
                                  </div>
                                  <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Date:</b></label>
                                      <input type="date" name ="tic_date" class="form-control">
                                  </div>
                                  </div>
                                  <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Time:</b></label>
                                      <input type="time" name ="tic_time" class="form-control">
                                  </div>
                                     </div>          
                                  <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Issue desription:</b></label>
                                      <input type="text" name ="desription" class="form-control">
                                  </div>
                                  </div>    
                                
                                  <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>assign to:</b></label>
                                      <!-- <input type="text" name ="issue_desc" class="form-control"> -->
                                      <select name="assign_to" class="form-control">
                                      <option>[--Select Staff--]</option>
                                      <?php
                                     $selClient      =   $obj->staff_drop_down();
                                     while($fetch        =   $selClient->fetch()){
                                        $id             =   $fetch['id']; 
                                        $name           =   $fetch['name']; 
                                        echo "<option value='$id'>$name</option>";
                                          }
                                     ?>
                                     </select>
                                  </div>
                                  </div>   
                                    <div class="col-lg-2">
                                   <div class="form-group">
                                      <label><b>Expected Date:</b></label>
                                      <input type="date" name ="issue_desc" class="form-control">
                                  </div>
                                  </div>      
                                  <div class="col-lg-2">
                                   <div class="form-group">
                                      <label><b>expected time:</b></label>
                                      <input type="time" name ="exp_time" class="form-control">
                                  </div>
                                  </div>    
                                  <div class="col-lg-4">
                                   <div class="form-group">                                      
                                      <input type="submit" class="btn btn-success" name ="assign" value="assign" style="margin-top:23px">
                                  </div>
                                  </div>
                               </div>
                               
                           </div>
                     </div> 
                                      
                     <div class="tab-pane" id="changepasswd">          
                     <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                           <div class="panel-header"></div>
                               <div class="panel panel-body">        
                                 <h3 class="panel-heading text-danger"><b> <?php// echo $_SESSION['uname']; ?>  Change Password</b></h3>
                                 <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Old Password</b></label>
                                      <input type="password" name ="oldpswwd" class="form-control" placeholder="Old Password">
                                  </div>
                                  </div>
                                  <div class="col-lg-4">
                                     <div class="form-group">
                                      <label><b>New Password</b></label>
                                      <input type="password" name ="Npswd" class="form-control" placeholder="New Password">
                                  </div>
                                  </div>
                                  <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Comfirm Password:</b></label>
                                      <input type="text" name ="S_id" class="form-control" placeholder="Comfirm Password">
                                  </div>
                                  </div>
                                                
                                
                                    
                                  <div class="col-lg-4">
                                   <div class="form-group">                                      
                                      <input type="submit" class="btn btn-success" name ="upswd" value="update" style="margin-top:23px">
                                  </div>
                                  </div>
                               </div>
                               
                           </div>
                     </div> 
                     
                     
              
                     <div class="tab-pane" id="treat">          
                     <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                           <!-- <div class="panel-header"></div> -->
                               <div class="panel panel-body">        
                                 <h3 class="panel-heading text-danger"><b> View Issues</b> </h3>
                                 <section id="unseen">
                                 <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Client's Nmae</th>
                      <th class="numeric">Sender ID</th>
                      <th class="numeric">Issue DESCription</th>
                      <th class="numeric">Subject</th>
                      <th class="numeric">Communication chanel</th>
                      <th class="numeric">Date</th>
                      <th class="numeric">Time</th>                  
                      <th class="numeric">Expected date</th>
                      <th class="numeric">Expected time</th>
                      <th class="numeric">Reply</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                    </tr>
                                  </table>
          </section>
                               </div>                
                               
                           </div>
                     </div>
                     <div class="tab-pane" id="view_aissues">          
                     <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                           <!-- <div class="panel-header"></div> -->
                               <div class="panel panel-body">        
                                 <h3 class="panel-heading text-danger"><b> View Issues</b> </h3>
                                 <section id="unseen">
                                 <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Client's Nmae</th>
                      <th class="numeric">Sender ID</th>
                      <th class="numeric">Issue Description</th>
                      <th class="numeric">Subject</th>
                      <th class="numeric">Communication chanel</th>
                      <th class="numeric">Date</th>
                      <th class="numeric">Time</th>
                      <th class="numeric">Assign TO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                      <td class="numeric"></td>
                    </tr>
                                  </table>
                   </section>
                               </div>                
                               
                           </div>
                     </div> 
                   
                     <div class="tab-pane" id="send_issues">          
                     <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
                           <div class="panel-header"></div>
                               <div class="panel panel-body">        
                                 <h3 class="panel-heading text-danger"><b> <?php// echo $_SESSION['uname']; ?>  Send Issues Here</b> </h3>
                                 <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Client's Name:</b></label>
                                      <select class="form-control" name="client_id">
                                   <option>--Select Client's name--</option>
                                   <?php
                                     $selClient      =   $obj->client_drop_down();
                                     while($fetch        =   $selClient->fetch()){
                                        $id             =   $fetch['id']; 
                                        $name           =   $fetch['name']; 
                                        echo "<option value='$id'>$name</option>";
                                    }
                                   ?>
                                      </select>
                
                                  </div>
                                  </div>
                                  <div class="col-lg-4">
                                     <div class="form-group">
                                      <label><b>Subject:</b></label>
                                      <input type="text" name ="subject" class="form-control">
                                  </div>
                                  </div>
                                  <div class="col-lg-4">    
                                   <div class="form-group">
                                      <label><b>Chanel:</b></label>
                                      <!-- <input type="text" name ="sender_id" class="form-control"> -->
                                      <select class = "form-control" name="tic_chanel">
                                      <?php
                                     $selClient      =   $obj->comm_chenal_drop_down();
                                     while($fetch        =   $selClient->fetch()){
                                        $com_id             =   $fetch['com_id']; 
                                        $com_name           =   $fetch['com_name']; 
                                        echo "<option value='$com_id'>$com_name </option>";
                                    }
                                   ?>                                        
                                      </select>
                                  </div>
                                  </div>
                                  <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Sender ID:</b></label>
                                      <input type="text" name ="sender_id" class="form-control">
                                  </div>
                                  </div>
                                  <div class="col-lg-2">
                                   <div class="form-group">
                                      <label><b>Date:</b></label>
                                      <input type="date" name ="tic_date" class="form-control">
                                  </div>
                                  </div>
                                  <div class="col-lg-2">
                                   <div class="form-group">
                                      <label><b>Time:</b></label>
                                      <input type="time" name ="tic_time" class="form-control">
                                  </div>
                                     </div>          
                                  <div class="col-lg-4">
                                   <div class="form-group">
                                      <label><b>Issue desription:</b></label>
                                      <input type="text" name = "description" class="form-control">
                                  </div>
                                  </div>    
                                  <div class="col-lg-4">
                                   <div class="form-group">                                      
                                      <input type="submit" onclick="add_ticket()"  class="btn btn-success" name ="send_issues">
                                  </div>
                                  </div>
                                   <hr>
                               </div>
                              
                                  
                               </div>
                                   
                                
                                
                              
                                 
                           </div>
                     </div> 
          
        
                     
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
  <script src="js/mycores.js"></script>
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
 </form>
</body>

</html>
