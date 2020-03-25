<?php
session_start();
   include_once "db_query_page.php"; 
   $obj = new dbquery();
$online = "<span>online</span>";
$username    = $_SESSION['user'];
   $insert_info  =  "";
   $cand_position="--------Check me-------";
   if (isset($_POST['add_cand']))
   { 
       //vars holding the input fields
        $cand_reg_number       =     $_POST['cand_reg_number'];   
        $cand_FirstName        =     $_POST['cand_FirstName'];
        $cand_LastName         =     $_POST['cand_LastName'];
        $cand_date_of_birth    =     $_POST['cand_date_of_birth'];
        $cand_gender           =     $_POST['cand_gender'];
        $cand_address          =     $_POST['cand_address'];
        $cand_institution      =     $_POST['cand_institution'];
        $cand_department       =     $_SESSION['department'];
        $cand_level            =     $_POST['cand_level'];
        $cand_Phone            =     $_POST['cand_Phone'];
        $cand_email            =     $_POST['cand_email'];
        $cand_nationality      =     $_POST['cand_nationality'];
        $cand_state            =     $_POST['cand_state'];
        $cand_lga              =     $_POST['cand_lga'];
        $cand_position         =     $_POST['cand_position'];  
        $photo                 =     $_FILES['cand_image_path']['name'];
       // to upload the image into the uploads folder
       $cand_img_uplaod    =   'candidate_pictures/'.$photo;
       
   if(!empty($cand_reg_number) && !empty($cand_Phone) && !empty($cand_email))
   {
      //accessing checkDuplicateReg method and storing it in a variable duplicateReg
       $duplicateReg = $obj->checkCandDuplicateReg($cand_reg_number);
           if($duplicateReg){ 
               //Meaning reg number is more than 1 if true
               $insert_info =  '<div class="btn btn-warning">Same reg</div>';
           }
           else{
               //meaning the Reg No does not exist then accessing the method insert_Candidate_dets_table
       $obj->insert_Candidate_details_query(
        $cand_reg_number
        ,$cand_LastName
        ,$cand_FirstName
        ,$cand_date_of_birth
        ,$cand_gender
        ,$cand_address
        ,$cand_institution
        ,$cand_department
        ,$cand_level
        ,$cand_Phone
        ,$cand_email
        ,$cand_nationality
        ,$cand_state
        ,$cand_lga
        ,$cand_position
        ,$cand_img_uplaod
       );   
        $insert_info = '<div class="btn btn-success">Record Inserted</div>';
   }
   }
   else
   {
       $insert_info =  '<div class="btn btn-danger">Record Not Inserted! Some fields are null</div>';
        } 
   }
   $access_view_cand_list_method  = $obj->view_admin_list($username);
  while($access_cand_dets=$access_view_cand_list_method->fetch()){ 
    $photo              =   $access_cand_dets['image_path'];
    $department         =   $access_cand_dets['dept'];
	$_SESSION['department']		=	$department ;
  }
   if(isset($_GET['logout'])){
    session_destroy();
    header('location:./login_page.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Register Candidate</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- CSS Files -->
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/atlantis.min.css">
	<script src="bootstrap4/js/jquery.min.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>
<body style="background-color:rgb(207,207,207)">
<?php
    include "includes_files/header.php";
?>

<div class="row justify-content-center">
    <div class="col-lg-3">
    <div class="card">
    <div class="card-header bg-dark" align="left">
    <div style="width:100%"><h5 class="card-text text-white"><img src="<?= $photo; ?>" class="rounded-circle" alt="logo" width="60" height="60">&nbsp;&nbsp;&nbsp; <?= $username;?>&nbsp;&nbsp;<?= $online; ?>&nbsp;&nbsp;<img src="images/onlineLogo.png" class="rounded-circle" alt="logo" width="10" height="10"></h5></div>
    </div>
    <div class="card-body" style="background-color:rgb(230,230,230)">
        <div class=" col-12">
						
						<a href="election_list.php" class="btn btn-dark btn-block">Manage Elections</a> 
						</div><hr>
                        <div class=" col-12">
							<a href="viewCand.php" class="btn btn-dark btn-block">Manage Candidate</a> 
                        </div><hr>
						<div class=" col-12">
							<a href="addVoter.php" class="btn btn-dark btn-block"> Add Eligible voter</a> 
                        </div><hr>
						<div class=" col-12">
							<a href="viewVoter.php" class="btn btn-dark btn-block">Manage Voter</a> 
                        </div><hr>
                        <div class=" col-12">
                        <a href="login_page.php?logout" class="btn btn-dark btn-block">log out</a> 
                        </div> 
  </div>
</div>  
</div>
    <div class="col-sm-9">
     <div class="row justify-content-center">
        <div class="col-11 mt-2">
        <div class="col-12" align="center">
            <div class="col-4">
            <?php echo $insert_info; ?>
            </div>
        </div>
        <!-- This panel will alow the admin to register new candidate -->
    <div class="card">
    <div class="card-header" style="background-color:rgb(207,207,207)">
        <div class="card-title"><p class="card-text text-center" style="font-size:25px; color:black">Add New Contestant</p></div>
    </div>
    <div class="card-body" style="background-color:rgb(230,230,230)">
		<form method="POST" action="" enctype="multipart/form-data">
                                <div class="row">
								<div class="col-12">      
                                    <div class="form-group" align="center">
                                    <img src="images/pictLogo.png"  class="image-fluid rounded-circle" width="120" height="130" alt="No"><br>
                                    </div>
                                        <div class="choose_file text-center col-12">
                                        <label><b> Upload picture<b></label><input type = "file" name="cand_image_path" class="form-control">
                                        </div>
                                    <hr>	
                                    <div class="row">
                                        <div class="col-lg-4">
                                                <div class="form-group">
                                                <label for=""><b>Registration Number</b></label>
                                                 <input type="text" name="cand_reg_number" class="form-control"placeholder ="Registration Number" autofocus="ON" autocomplete="ON">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for=""><b>First Name</b></label>
                                                 <input type="text" name="cand_FirstName" class="form-control" placeholder =" Your First Name" autocomplete="ON">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for=""><b>Last Name</b></label>
                                                 <input type="text" name="cand_LastName" class="form-control" placeholder ="Your Last Name" autocomplete="ON">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                                <div class="form-group">
												 <label for=""><b>DOB</b></label>
                                                <input type="date" name="cand_date_of_birth" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            <label for=""><b>Gender</b></label>
                                                 <select name="cand_gender" id="" class="form-control">
                                                 <option value="<?= $cand_gender; ?>" hidden>---Select Here---</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                 </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
										        <label for=""><b>Address</b></label>
										        <input type="text" name="cand_address" class="form-control" placeholder ="course of study" autocomplete="ON">     
                                            </div>
                                        </div>
                                          
                                        <div class="col-lg-4">
											<div class=" form-group">
                                        		<label for=""><b>Institution</b></label>
                                        		<input type="text" name="cand_institution" placeholder="Institution" class="form-control" autocomplete="ON">
											</div>
                                        </div>
                                        <div class="col-md-4">
                                         <div class=" form-group">
                                        <label for=""><b>Dept</b></label>
                                        <input type="text" value="<?= $_SESSION['department']; ?>" name="cand_department"  class="form-control btn-white">
                                        </div>
                                        </div>
                                        <div class="col-md-4">
										<div class="form-group">
                                                <label for=""><b>Level</b></label>
                                                <select name="cand_level" id="" class="form-control">
                                                    <option value="" hidden>Select here</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                    <option value="300">300</option>
                                                    <option value="400">400</option>
                                                 </select>
                                        </div>
                                        </div> 
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for=""><b>Phone</b></label>
                                                 <input type="text" name="cand_Phone" placeholder="Address" class="form-control" autocomplete="ON">
                                            </div>
										</div>
										<div class="col-md-4">
                                    		<div class=" form-group">
                                        		<label for=""><b>Email</b></label>
                                        		<input type="text" name="cand_email" value="" class="form-control" autocomplete="ON">
                                        	</div>
                                    	</div>

                                    <div class="col-md-4">
										<div class="form-group">
                                                    <label for=""><b>Nationality</b></label>
                                                     <select name="cand_nationality" id="" class="form-control">
                                                    <option value="" hidden>Select here</option>
                                                    <option value="Nigerian">Nigerian</option>
                                                    <option value="Foreigner">Foreigner</option>
                                                 </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class=" form-group">
                                        
                                        <label for=""><b>State</b></label>
                                         <select name="cand_state" id="" class="form-control">
                                         <option value="" hidden>Select here</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Kano">Kano</option>          
                                                 </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class=" form-group">
                                        <label for=""><b>LGA</b></label>
                                        <select name="cand_lga" id="" class="form-control">
                                        <option value="" hidden>Select here</option>
                                                    <option value="Nafada">Nafada</option>
                                                    <option value="Funakaye">Funakaye</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                    <div class=" form-group">
                                        <label for=""><b>position</b></label>
                                        <select name="cand_position" class="form-control">
                                        <option value='<?= $cand_position; ?>' hidden><?= $cand_position; ?></option>
                                            <?php
                                            $access_seats   =   $obj->select_all_elect_title($all_seats,$_SESSION['department']);
                                            while($show_seats   =   $access_seats->fetch()){
                                                    $select_1   =   $show_seats['elect_title'];

                                            echo"
                                            <option value='$select_1'>$select_1</option>";
                                            }?>
                                        </select>
                                        </div>
									</div>
									</div>
								</div>
                                </div>
                                </div>
            <div class="card-footer" style="background-color:rgb(207,207,207)">
                <div class="col-12">
				<div class="row">
                <div class="col-6">
                    <input type="submit" class="btn btn-dark pull-right" value="Register" name="add_cand">&nbsp;&nbsp;&nbsp;   
				</div>
				<div class="col-6">
                    <a href="admin.php" class="btn btn-dark">Close</a>
				</div>
                </div>
			    </div>
            </div>
            </form>
        </div>
        </div>
     </div>
    </div>
</div>
</body>
</html> 