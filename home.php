<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    ul {list-style: none;}

    ul li::before {
    content: "\2022";
    color: red;
    font-weight: bold;
    display: inline-block; 
    width: 1em;
    margin-left: -1em;
    }
    </style>
</head>

<body>
<div style="background-image: url('homepage.jpg');color:yellow;padding:120px;">
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    
     <!-- ======= Tabs Section ======= -->
    <h2>Please Choose :</h2>
    <p></p>

    <ul>
    <h3><li><a class="navbar-brand" href="information.php">Information Page</a></li></h3>
    <h3><li><a class="navbar-brand" href="projectregister.php">Project Registration</a></li></h3>
    <h3><li><a class="navbar-brand" href="questionnaire.php">Questionnaire</a></li></h3>
    <h3><li><a class="navbar-brand" href="resultsession.php">Result of Each Session</a></li></h3>
    <h3><li><a class="navbar-brand" href="summaryproject.php">Overall Summary Project</a></li></h3>
    </ul>

    <p><a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></p>
</div>

</body>
</html>