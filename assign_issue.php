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
                     