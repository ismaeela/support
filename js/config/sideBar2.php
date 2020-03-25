 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="img/isah.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">         <?php echo $_SESSION['fname'];  echo $_SESSION['lname']; ?>
</h5>
          <li class="mt">
            <a  href="#dashboard" class="active"  data-toggle="tab">
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
                          
                        </ul>
                    </li>';
              echo '<li class="sub-menu">
                      <a href="javascript:;"><i class="fa fa-lock"></i><span>Change password</span></a>
                        <ul class="sub">
                          <li><a href="#changepassword" data-toggle="tab">Change password</a></li>
                        </ul>
                    </li>';


            }