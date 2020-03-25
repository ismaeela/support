<?php
$checking = $_SESSION['uname'];
if(!isset($checking)){
    header("location:index.php?msg=<div class='alert alert-danger'><h4>you must login to contInue</h4></div>");
}
?>