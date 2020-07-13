
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
    <title>Welcome</title>
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
  background-color: #333;
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

        
        
        
    </style>
</head>
<body>
    <br/><br/><br/><br/><br/><br/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <div class="column">
   <div class="label-info"><b>English To Bangla Translated Story Books</b></div>
   <div class="card">
        <div align="left"><img src="https://lh3.googleusercontent.com/-hliizk_ufdU/Xg4itQ_C2JI/AAAAAAAAEnQ/lsc_IxeDiFYOywpLUF8yjC7RNIZw57zfACLcBGAsYHQ/s1600/1577984689652709-0.png" height="60" width="45"/> <b> Margaret pdf bangla book</b> <p> <div align="center"><a href="https://drive.google.com/uc?export=download&id=1NuCu3yyMNpUu3hKlSoDY4LEvMnSPrda0">Download</a></p></div></div>
        </div>
       
        <div class="card">
        <div align="left"><img src="https://lh3.googleusercontent.com/-dyiFk_iLxMg/Xg2msk7qOmI/AAAAAAAAEm4/sPaR-32m5OMsEqs_KPELn1a_UFCn2K3MACLcBGAsYHQ/s1600/1577952943810858-0.png" height="60" width="45"/> <b> গথ by  অৎসুইশি</b>  ->> Size 8 MB<p> <div align="center"><a href="https://drive.google.com/uc?export=download&id=16cTlQU8jS79wn2sNsSc1xuwQQtKIwH19">Download</a></p></div></div>
        </div>
    
      <div class="card">
        <div align="left"><img src="https://lh3.googleusercontent.com/-hliizk_ufdU/Xg4itQ_C2JI/AAAAAAAAEnQ/lsc_IxeDiFYOywpLUF8yjC7RNIZw57zfACLcBGAsYHQ/s1600/1577984689652709-0.png" height="60" width="45"/> <b> Margaret pdf bangla book</b> <p> <div align="center"><a href="https://drive.google.com/uc?export=download&id=1NuCu3yyMNpUu3hKlSoDY4LEvMnSPrda0">Download</a></p></div></div>
        </div>
    </div>
    
    
  
</body>
</html>