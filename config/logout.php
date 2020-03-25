<?php 
include_once("config/conn.php");
session_start();
session_destroy();
header('location:index.php');
?>