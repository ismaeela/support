<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>lname</th><th>oname</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["lname"]." ".$row["oname"]."</td></tr>";
        $name = $row["lname"];
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
echo  $id ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Register Candidate</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row justify-content-center">
<!-- Here we gonna put the dashboard -->
    <div class="col-9">
     <div class="row justify-content-center">
        <!-- This panel will alow the admin to register new candidate -->
    <div class="card">
    <div class="card card-header card-deafault">
        <h3 class="card-title">Here is the details of</h3>
    </div>
    <div class="card-body" style="background-color:rgb(230,230,230)">
		<form method="POST" action="" enctype="multipart/form-data">
                                <div class="row">
								<div class="col-12">      
                                 
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
                                                 <input type="text" name="cand_FirstName" value="<?= $name ?>" class="form-control" placeholder =" Your First Name" autocomplete="ON">
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
                                        <option>hg</option>
                        
                                        </select>
                                        </div>
									</div>
									</div>
								</div>
                                </div>
                                </div>
            </form>
        </div>
        <div class="card-footer" style="background-color:rgb(207,207,207)">
                <div class="col-12">
				<div class="row">
				<div class="col-6">
                    <a href="admin.php" class="btn btn-dark">Close</a>
				</div>
                </div>
			    </div>
            </div>
            </div>
        </div>
     </div>
    </div>
</div>
</body>
</html> 