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
 <html>
     <title>Chat</title>
     <head>
         
         <style>
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

        
             
         </style>
     </head>
     <body>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php
include_once 'config.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $text_t = $_POST['text_t'];
	 
	
	 $sql = "INSERT INTO chat (name,text_t) VALUES('$name','$text_t')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
        
        
        
        
        
        
        
        
        
        <form method="post" action="chat.php">
		name:<br>
		<input type="text" name="name">
		<br>
		Text:<br>
		<input type="text" name="text_t">
		<br/>
		
		<input type="submit" name="save" value="submit">
	</form>
         
         
     </body>
     
 </html>