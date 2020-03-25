<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="img/.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">         <?php // echo $_SESSION['fname'];  echo $_SESSION['lname']; ?>
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
                      
                        <li><a href="#send_issues" data-toggle="tab">Send Issues</a></li>
                      
                    </li>';
           
              echo '<li class="sub-menu">                     
                        <li><a href="#view_aissues" data-toggle="tab">View Issues</a></li>                                            
                      
                    </li>';
                    echo '<li class="sub-menu">                     
                <li><a href="#treat" data-toggle="tab">Treat And Reply issues</a></li>                                            
              
            </li>';
                    echo '<li class="sub-menu">                     
                    <li><a href="#assign_issues" data-toggle="tab">Assign Duties</a></li> 
                                                               
                  
                </li>';
                echo '<li class="sub-menu">                     
                    <li><a href="#changepasswd" data-toggle="tab">Change password</a></li> 
                                                               
                  
                </li>';
                
                
                
            // }else{
            //   echo '<li class="sub-menu">
            //           <a href="javascript:;"><i class="fa fa-car"></i><span>Booking</span></a>
            //             <ul class="sub">
            //               <li><a href="#reserve_space" data-toggle="tab">Reserve Space</a></li>
            //               <li><a href="#update_book" data-toggle="tab">Update Booking</a></li>
                          
            //             </ul>
            //         </li>';
            //   echo '<li class="sub-menu">
            //           <a href="javascript:;"><i class="fa fa-lock"></i><span>Change password</span></a>
            //             <ul class="sub">
            //               <li><a href="#changepassword" data-toggle="tab">Change password</a></li>
            //             </ul>
            //         </li>';


            }
          ?> 

          
        
         
        

         
