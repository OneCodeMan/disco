<?php 
ob_start();
session_start();
$con = mysqli_connect("localhost", "root", "", "odytuts");

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}

// if user is not logged in, take them to register.php
if (isset($_SESSION['email'])) {
    $user_logged_in_email = $_SESSION['email'];
    $user_logged_in_query = mysqli_query($con, "SELECT * FROM users WHERE email='$user_logged_in_email'");
    $user = mysqli_fetch_array($user_logged_in_query);
} else {
    header("Location: register.php");
}

?>

<html>
<head>
    <title>OdyTuts</title>

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    
    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all-courses.css">
    <link rel="stylesheet" type="text/css" href="assets/css/course.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">OdyTuts</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">My Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./all-courses.php">All Courses</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php echo "Signed in as " . $_SESSION['email']; ?>
            </span>
            <span class="navbar-text">
                <a class="nav-link" href="includes/handlers/logout.php">
                    Log Out
                </a>
            </span>
        </div>
    </nav>
</body>
</html>