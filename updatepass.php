<?php
if (isset($_POST['reset'])){
//  session_start();
    $crpassword        = $_POST['old_passwd'];    
    $npassword        = $_POST['new_passwd'];
    $cnpassword         = $_POST['comfirm_passwd'];
    // $name            =  $_SESSION['username'];




    $sql   = mysql_query("SELECT * FROM users WHERE password = '$oldpsswd' AND username = '$name'");
    $check = mysql_num_rows($sql);
    // $data  = $fetch['password'];
   
 if ($newpsswd  !== $comfirm) {
   header("location:Dashbord.php?msg=<div class = 'alert alert-danger'>your old password is wrong</div>");
       } 
  
   if($check==0) {
      header("location:Dashbord.php?msg=<div id='message' class = 'alert alert-danger'> your comfirm Password is not match</div>");
    }
     
     
     elseif($check>0 AND $newpsswd == $comfirm){
      $udate = mysql_query("UPDATE users SET password ='$newpsswd' WHERE username = '$name'");
     
     header("location:Dashbord.php?msg='<div  class = 'alert alert-success'>Update Sucessfully</div>'");
}

  }
  ?>