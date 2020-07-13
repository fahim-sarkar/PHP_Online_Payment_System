
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 <?php include 'top.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LoggedIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        <link rel="stylesheet" type="text/css" href="style.css">
        
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
  background-color: #27765D;
}

.active {
  background-color: #27765D;
}

        
        
        
        
        .omg {
  background-color: #0E654A;
    </style>
</head>
<body>
    
    </body>
    </html>
   
  <!DOCTYPE html>
<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <div class="column"><div align="left"><div class="btn btn-info"><img src="https://i.ibb.co/1qfM5j6/activity-icon-blue-1.png" height="15"/> Activities</div><div class="card"><div align="left"><p></p>
<?php
$servername = "auth-db180.hostinger.com";
$username = "u943645959_Fahim";
$password = "445566";
$dbname = "u943645959_Fahim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,username, paid, month,t_text FROM user_update ORDER BY id DESC LIMIT 3";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "". "<p></p> ". $row["username"]. "  has been " . $row["paid"] . "  for ". $row["month"]." to " . $row["t_text"]. "<br/><hr/>";
    }
} else {
    echo "No notice at this moment";
}

$conn->close();
?></div></div></div>
<div align="left">
[ <a href="all_updates.php"> View More Activities</a> ] </div> <br/>

<br/>

<div align="left"><div class="column"><div class="btn btn-success"><img src="https://i.ibb.co/QdmPfMt/pngwave.png" height="17"/> Dashboard of <?php echo $_SESSION['username']; ?></div> [ <a href="add_email.php">Add Email Or Update Email</a> ]
<div class="card"><br/>
     + <b>Username:</b> <?php echo $_SESSION['username']; ?><hr/>
    + <b>Expiration Date:</b> <font color="red"><?php echo $_SESSION['email']; ?></font><hr/>
    + <b>Status:</b> <font color="green"><i><?php echo $_SESSION['status']; ?></i></font> [ <a href="payment.php">Pay Now</a></a> ]<hr/>
    
    
</div></div>
</div><div

<div class="bg-info">If you not pay us then your status will be empty but if you pay then it will show paid with in 1 hour. for any help contact with us!  <a href="contact.php">Click Here </a> Thank You</div><br/><br/><br/><br/>

</body>
</html>
   
     <?php include 'unloggedfoter.php';?>
  
