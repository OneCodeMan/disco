<?php 
ob_start();
session_start();
$con = mysqli_connect("us-cdbr-east-02.cleardb.com", "b15ce807601a58", "d5368fc6", "heroku_34dac4a7fad0f34");

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}

?>