<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isah";

// Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}

// sql to delete a record
if(isset($_GET['id'])){
    $id = $_GET['id'];
$sql = "DELETE FROM booking WHERE id=$id";
$res = $conn2->query($sql);
if ($res) {
    // echo "Record deleted successfully";
    header("location:Dashboard.php");
} else {
    echo "Error deleting record: " . $conn2->error;
}
}
$conn2->close();
?>