<?php 
ob_start();
session_start();
$con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b15ce807601a58", "d5368fc6", "odytuts");

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}

?>