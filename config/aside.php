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
                      
                        <li><a  id = "send_issue" href="#" data-toggle="tab">Send Issues</a></li>
                      
                    </li>';
           
              echo '<li class="sub-menu">                     
                        <li><a id = "view_issue" href="#" data-toggle="tab">View Issues</a></li>                                            
                      
                    </li>';
                    echo '<li class="sub-menu">                     
                <li><a id = "treated_issue" href="#" data-toggle="tab">Treat And Reply issues</a></li>                                            
              
            </li>';
                    echo '<li class="sub-menu">                     
                    <li><a id = "assign_issue" href="#" data-toggle="tab">Assign Duties</a></li> 
                                                               
                  
                </li>';
                echo '<li class="sub-menu">                     
                    <li><a id = "change_password" href="#" data-toggle="tab">Change password</a></li> 
                                                               
                  
                </li>';

                
                
                
            }else{
              


            }
          ?> 

          
        
         
        

         
