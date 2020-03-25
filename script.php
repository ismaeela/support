<?php
  session_start();
  include_once("config/conn.php");
  include_once("config/check_user.php");
    // insert user
  if(isset($_POST['save'])){
      $parking = mt_rand(10000,99999);
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $oname = $_POST['oname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $car = $_POST['car'];
      $pnumber = $_POST['pnumber'];
      $space = $_POST['space'];
      $date = $_POST['date'];
      $time_in = $_POST['timein'];
      $time_out = $_POST['timeout'];
      $charge = $_POST['charge'];
  try{
      $sql = "INSERT INTO booking(parking_id,fname,lname,oname,phone,email,address,gender,car,pnumber,space,
      date,time_in,time_out,charge)VALUES(:parking,:fname,:lname,:oname,:phone,:email,:address,:gender,:car,
      :pnumber,:space,:date,:timein,:timeout,:charge)";

      $stmt = $pdo->prepare($sql);
    
      $stmt->bindParam(':parking',$parking);
      $stmt->bindParam(':fname',$fname);
      $stmt->bindParam(':lname',$lname);
      $stmt->bindParam(':oname',$oname);
      $stmt->bindParam(':phone',$phone);
      $stmt->bindParam(':email',$email);
      $stmt->bindParam(':address',$address);
      $stmt->bindParam(':gender',$gender);
      $stmt->bindParam(':car',$car);
      $stmt->bindParam(':pnumber',$pnumber);
      $stmt->bindParam(':space',$space);
      $stmt->bindParam(':date',$date);
      $stmt->bindParam(':timein',$time_in);
      $stmt->bindParam(':timeout',$time_out);
      $stmt->bindParam(':charge',$charge);
      $stmt -> execute();

     header("location:Dashboard.php");

  }
  catch(PDOException $e) {
    $errormsg = $e->getMessage();
}
  } else{
      echo" not registered";
  } 

  //update
  if(isset($_POST['update']))
{
// Get the userid
$id=intval($_GET['id']);
// Posted Values  
$parking = mt_rand(10000,99999);
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $oname = $_POST['oname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $car = $_POST['car'];
      $pnumber = $_POST['pnumber'];
      $space = $_POST['space'];
      $date = $_POST['date'];
      $time_in = $_POST['timein'];
      $time_out = $_POST['timeout'];
      $charge = $_POST['charge'];

// Query for Query for Updation
$sql1="UPDATE booking set fname=:fname,lname=:lname,oname=:oname,phone=:phone,
address=:address,gender=:gender,car=:car,pnumber=:pnumber,space=:space,date=:date,
time_in=:time_in,time_out=:time_out,charge=:charge where id=:id";
//Prepare Query for Execution
$query = $pdo->prepare($sql1);
// Bind the parameters
$query->bindParam(':parking',$parking);
$query->bindParam(':fname',$fname);
$query->bindParam(':lname',$lname);
$query->bindParam(':oname',$oname);
$query->bindParam(':phone',$phone);
$query->bindParam(':email',$email);
$query->bindParam(':address',$address);
$query->bindParam(':gender',$gender);
$query->bindParam(':car',$car);
$query->bindParam(':pnumber',$pnumber);
$query->bindParam(':space',$space);
$query->bindParam(':date',$date);
$query->bindParam(':timein',$time_in);
$query->bindParam(':timeout',$time_out);
$query->bindParam(':charge',$charge);
$query->bindParam(':id',$id);
$query -> execute();

header("location:Dashboard.php");
// Query Execution
// $query->execute();
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>"; 
}
?>

