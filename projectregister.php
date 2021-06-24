<?php
// Initialize the session
session_start();

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$project_id = $projectName = $projectDuration = $owner = $financial = $mode = "";
$project_id_err = $projectName_err = $projectDuration_err = $owner_err = $financial_err = $mode = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate projectName
    $input_projectName = trim($_POST["projectName"]);
    if(empty(trim($_POST["projectName"]))){
        $projectName_err = "Please enter your project name.";
    } elseif(!preg_match('/^[a-zA-Z_]+$/', trim($_POST["projectName"]))){
        $projectName_err = "Project name can only contain letters and underscores.";
    } else{
        $projectName = $input_projectName;
    }
    
    // Validate projectDuration
    if(empty(trim($_POST["projectDuration"]))){
        $projectDuration_err = "Please enter a project duration.";     
    } else{
        $projectDuration = trim($_POST["projectDuration"]);
    }
    
    // Validate owner
    $input_owner = trim($_POST["owner"]);
    if(empty(trim($_POST["owner"]))){
        $owner_err = "Please enter your name.";     
    } else{
        $owner = $input_owner;
    }

    // Validate financial
    $input_financial = trim($_POST["financial"]);
    if(empty(trim($_POST["financial"]))){
        $financial_err = "Please enter a financial.";     
    } elseif(!preg_match('/^[0-9]+$/', trim($_POST["financial"]))){
        $financial_err = "Financial can only contain numbers.";
    } else{
        $financial = $input_financial;
    }

    // Validate mode
    if(empty(trim($_POST["mode"]))){
        $mode_err = "Please enter a mode project.";     
    } else{
        $mode = trim($_POST["mode"]);
    }
    
    // Check input errors before inserting in database
    if(empty($projectDuration_err) && empty($projectName_err) && empty($owner_err) && empty($financial_err) && empty($mode_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO projectregister (projectDuration, projectName, owner, financial, mode, id) VALUES (:projectDuration, :projectName, :owner, :financial, :mode, :id)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":projectDuration", $param_projectDuration);
            $stmt->bindParam(":projectName", $param_projectName);
            $stmt->bindParam(":owner", $param_owner);
            $stmt->bindParam(":financial", $param_financial);
            $stmt->bindParam(":mode", $param_mode);
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_projectDuration = $projectDuration;
            $param_projectName = $projectName;
            $param_owner = $owner;
            $param_financial = $financial;
            $param_mode = $mode;
            $param_id = $_SESSION["id"];

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: home.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto; }
    </style>
</head>
<body>
    <div class="wrapper">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <h2>Project Registration</h2>
        <p>Please fill this form to register project.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                 <label>User Id</label>
                 <input type="text" name="id" class="form-control" value="<?php echo htmlspecialchars($_SESSION["id"]); ?>" disabled>
                 <span class="invalid-feedback"><?php echo $name_err;?></span>
            </div>
            <div class="form-group">
                <label>Project Name :</label>
                <input type="text" name="projectName" class="form-control <?php echo (!empty($projectName_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $projectName; ?>">
                <span class="invalid-feedback"><?php echo $projectName_err; ?></span>
            </div>
            <div class="form-group">
                <label>Owner Name :</label>
                <input type="text" name="owner" class="form-control <?php echo (!empty($owner_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $owner; ?>">
                <span class="invalid-feedback"><?php echo $owner_err; ?></span>
            </div>
            <div class="form-group">
                <label>Project Duration :</label>
                <input type="text" name="projectDuration" class="form-control <?php echo (!empty($projectDuration_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $projectDuration; ?>">
                <span class="invalid-feedback"><?php echo $projectDuration_err; ?></span>
            </div>
            <div class="form-group">
                <label>Project Financial :</label>
                <input type="text" name="financial" class="form-control <?php echo (!empty($financial_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $financial; ?>">
                <span class="invalid-feedback"><?php echo $financial_err; ?></span>
            </div>
            <div class="form-group">
                <label>Project Mode :</label>
                <select name="mode" class="form-control <?php echo (!empty($mode_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mode; ?>">
					<option disabled="" selected=""></option>
					<option value="insource"> Insource</option>
					<option value="outsource"> Outsource</option>
					<option value="co-source"> Co-source</option>
					<option value="unspecified"> Unspecified</option>
				</select>
				<span class="invalid-feedback"><?php echo $mode_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p><a href="home.php" class="btn btn-danger ml-3">Back to Home Page</a></p>
        </form>
    </div>
    </div>
    </div>
    </div>    
</body>
</html>