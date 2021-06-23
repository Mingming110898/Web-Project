<!DOCTYPE html>
<html lang="en">
<head>
   <title>Bootstrap Project</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap.main.css">
</head>

<body>
<nav class="navbar navbar-expand-md">
   <a class="navbar-brand" href="welcome.php">Uiniversity Putra Malaysia</a>
   <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
     data-target="#main-navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="main-navigation">
    <ul class="navbar-nav">
     <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
     </li>
  
    <li class="nav-item">
      <a class="nav-link" href="#C1">About</a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href="#C2">Sign Up Now</a>
    </li>
    </ul>
   </div>
   </nav>

<header class="page-header header container-fluid">
    <div class="overlay"></div>
    <div class="description"> 
    <h1>Welcome to Project Complexity and Risk Assessment Tool !</h1> 
    <p>Estimating the risk and complexity for your Project by Group ...</p> 
    <button class="btn btn-outline-secondary btn-lg"><a href= "https://www.youtube.com/watch?v=QgALrPHrsk4">Tell Me More!</a></button>
    </div>
</header>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5
D92v7s" crossorigin="anonymous"></script>
<script src="main.js"></script>

<!-- ======= About Section ======= -->
<div style="background-color:black;color:white;padding:15px;">
<section id="C1" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h2>Project Complexity and Risk Assessment Tool</h2>
              <p>The PCRA is calculated based on seven (7) characteristics.</p>
              <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h3>1. Project Characteristics</h3>
                  <p>This category is designed to build a profile of a given project with respect to key attributes, including funding, budget, size and number of resources, duration, scope, technology scope, stakeholders, dependencies, and external considerations.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h3>2. Strategic Management Risks</h3>
                  <p>This category assesses a project's alignment with the organization's investment plan:
                      > Is the project well-positioned to achieve the goals and objectives of the plan?
                      > Is the project a potential risk to the plan?</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h3>3. Procurement Risks</h3>
                  <p>This category assesses the extent to which procurement activities present potential risks to the project.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h3>4. Human Resource Risks</h3>
                  <p>This category assesses whether the project team has the right skill sets in place, with the appropriate roles and responsibilities.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h3>5. Business Risks</h3>
                  <p>This category assesses the extent to which the project affects the organization operationally and from a legislative perspective.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h3>6. Project Management Integration Risks</h3>
                  <p>This category assesses whether the project demonstrates implementation of key project management control measures and deliverables. This assessment includes addressing the state of the project management plan, project management and control disciplines, and information management processes.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h3>7. Project Requirements Risks</h3>
                  <p>This category assesses, by considering the number, type, and degree of certainty of the requirements, the extent to which the specific requirements of the project add risk and complexity.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
        </div>
      </div>
    </section><!-- End About Section -->


<!-- Sign Up Section -->
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$user_role = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Validate user role
    if(empty(trim($_POST["user_role"]))){
        $user_role_err = "Please enter role.";     
    } else{
        $user_role = trim($_POST["user_role"]);
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, role) VALUES (:username, :password, :role)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":role", $param_role, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_role = $user_role;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                if (!headers_sent()) {
                  header("location: login.php");
                  // die("Redirect failed. Please click on this link: <a href=...>");
              }
                // header("location: login.php");
             }
             else{
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
    <div id="C2" class= "container features"> 
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>User Role</label>
                <input type="text" name="user_role" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $user_role; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div> 
       
</body>

</html>
