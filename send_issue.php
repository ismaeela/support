<?php
 session_start();
        function __autoload($class){
            $myClass="support_methods.php";
            include_once("$myClass");
        }

        $obj = new mains_methods();
?>

<div class="tab-pane" id="send_issue">          
      <div class="panel" style="padding-left: 25px; padding-right: 25px;margin-top:10px; border-radius: 10px; box-shadow: 0px 2px 17px 0px #aaaaaa;">
         <div class="panel-header"></div>
            <div class="panel panel-body">        
               <h3 class="panel-heading text-danger"><b>  Send Issues Here</b> </h3>
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
                                          <input type="text" name ="description" class="form-control">
                                       </div>
                                    </div>    
                                       <div class="col-lg-4">
                                          <div class="form-group">  
                                          <!-- <button class="insert">submit</button>                                     -->
                                             <input type="submit" class="btn btn-success" name ="send_issue">
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
            </form>