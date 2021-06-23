<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$projectID = $projectDuration = $projectName = $owner = $financial = $mode = "";
$projectID_err = $projectDuration_err = $projectName_err = $owner_err = $financial_err = $mode = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate projectID
    if(empty(trim($_POST["projectID"]))){
        $projectID_err = "Please enter project ID.";     
    } elseif(!preg_match('/^[0-9]+$/', trim($_POST["projectID"]))){
        $projectID_err = "Project ID can only contain numbers.";
    } else{
        $projectID= trim($_POST["projectID"]);
    }

    // Validate projectName
    if(empty(trim($_POST["projectName"]))){
        $projectName_err = "Please enter a project name.";
    } elseif(!preg_match('/^[a-zA-Z_]+$/', trim($_POST["projectName"]))){
        $projectName_err = "Project name can only contain letters and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":projectName", $param_projectName, PDO::PARAM_STR);
            
            // Set parameters
            $param_projectName = trim($_POST["projectName"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $projectName_err = "This project name is already taken.";
                } else{
                    $projectName = trim($_POST["projectName"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Validate projectDuration
    if(empty(trim($_POST["projectDuration"]))){
        $projectDuration_err = "Please enter a project duration.";     
    } else{
        $projectDuration = trim($_POST["projectDuration"]);
    }
    
    // Validate owner
    if(empty(trim($_POST["owner"]))){
        $owner_err = "Please enter a owner name.";     
    } else{
        $owner = trim($_POST["owner"]);
    }

    // Validate financial
    if(empty(trim($_POST["financial"]))){
        $financial_err = "Please enter a financial.";     
    } elseif(!preg_match('/^[0-9]+$/', trim($_POST["financial"]))){
        $financial_err = "Financial can only contain numbers.";
    } else{
        $financial= trim($_POST["financial"]);
    }

    // Validate mode
    if(empty(trim($_POST["mode"]))){
        $mode_err = "Please enter a mode project.";     
    } else{
        $mode = trim($_POST["mode"]);
    }
    
    // Check input errors before inserting in database
    if(empty($projectID_err) && empty($projectDuration_err) && empty($projectName_err) && empty($owner_err) && empty($financial_err) && empty($mode_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO projectregistration (projectID, projectDuration, projectName, owner, financial, mode) VALUES (:projectID, :projectDuration, :projectName, :owner, :financial, :mode)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":projectID", $param_projectID, PDO::PARAM_STR);
            $stmt->bindParam(":projectDuration", $param_projectDuration, PDO::PARAM_STR);
            $stmt->bindParam(":projectName", $param_projectName, PDO::PARAM_STR);
            $stmt->bindParam(":owner", $param_owner, PDO::PARAM_STR);
            $stmt->bindParam(":financial", $param_financial, PDO::PARAM_STR);
            $stmt->bindParam(":mode", $param_mode, PDO::PARAM_STR);
            
            // Set parameters
            $param_projectID = $projectID;
            $param_projectDuration = $projectDuration;
            $param_projectName = $projectName;
            $param_owner = $owner;
            $param_financial = $financial;
            $param_mode = $mode;

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
        body{ font: 14px sans-serif; }
        .wrapper{ width: 800px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Project Registration</h2>
        <p>Please fill this form to register project.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Project ID :</label>
                <input type="text" name="projectID" class="form-control <?php echo (!empty($projectID_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $projectID; ?>">
                <span class="invalid-feedback"><?php echo $projectID_err; ?></span>
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
                <input type="text" name="mode" class="form-control <?php echo (!empty($mode_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mode; ?>">
                <span class="invalid-feedback"><?php echo $mode_err; ?></span>
                <p>*(insource/ outsource/ co-source/ unspecified)*</p>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p><a href="home.php" class="btn btn-danger ml-3">Back to Home Page</a></p>
        </form>
    </div>    
</body>
</html>