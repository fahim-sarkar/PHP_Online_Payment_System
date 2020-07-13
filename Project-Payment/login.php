<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id,email,status, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id,$email, $status,$username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                           
                            $_SESSION["email"] = $email;
                             $_SESSION["status"] = $status;
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
        
        .column {
  float: left;
  width: 100%;
  margin-bottom: 16px;
  padding: 0 8px;
background-color: #ffffff;

}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;

}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
color: white;
}

.title {
  color: gray;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: gray;
  text-align: center;
  cursor: pointer;
  width: 7%;
}

.button:hover {
  background-color: gray;
}




.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}






.left, .right {
  float: left;
  width: 20%; /* The width is 20%, by default */
}

.main {
  float: left;
  width: 60%; /* The width is 60%, by default */
}

/* Use a media query to add a breakpoint at 800px: */
@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}


body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #27765D;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

        
        
        
        
        .omg {
  background-color: #0E654A  ;
}
    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

     <ul><div class="omg" align="center"><font size="6"><font color="#E8F0EE"><big><b>BroadBand -Sky</b></big></font></font></div>
         
  <li><a class="active" href="index.php"><font color="white">Home</font></a></li>
 
  
   <li><a href="videos.php"><font color="white">Services</font></a></li>
  <li><a href="#contact"><font color="white">About Us</font></a></li>
    <li><a href="#contact"><font color="white">Contact Us</font></a></li>

</ul><br/><br/><br/><br/><br/><br/><br/>

    <div class="card"><div class="column"><div class="card">
    
     <div class="btn btn-warning"><b><i>Login Form</i></b></div><p></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="has-danger"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Login"><br/>
                <div align="center">
               Didn't have an account?  <a href="register.php">Register Now</a></div><br/>
             
            </div>
            <p></p>
        </form></div></div></div>
    </div>    
</body>
</html>