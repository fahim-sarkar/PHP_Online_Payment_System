<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: login.php");
    exit;
}
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="fahim.css">
    <meta charset="UTF-8">
    <title>Chakrampur </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 300px; padding: 20px; }
        
        
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
  background-color: #E3E2E2;
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
  background-color: #E3E2E2;
}

.active {
  
        
        

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
  background-color: #E3E2E2;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: center;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #E3E2E2;
}

.active {
  background-color: #E3E2E2;
}

        
        
        

.omg {
  background-color: #0E654A;

    </style>
  
    
</head>
<body>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   
    <ul>
     <div class="omg" align="center"><font size="5"><font color="#E8F0EE"><big><b>BroadBand -Sky</b></big></font></font></div>
    
      <p></p><div align="center"><img src="https://i.ibb.co/rcYFYbf/kisspng-computer-icons-avatar-social-media-blog-font-aweso-avatar-icon-5b2e99c4409623-4643918115297806762646.png" width="35" height="30"/>     <font color="white"><?php echo htmlspecialchars($_SESSION["username"]); ?></font>  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Green_sphere.svg/240px-Green_sphere.svg.png" width="10" height="10"/> <font color="yellow">Online</font> <p></p></div>
      
     
     
     </div> </ul>
     <br/><br/> <br/><br/><br/> <div align="right">
     
      <select name="formal" onchange="javascript:handleSelect(this)">
<option value="home">Open Menu</option>
<option value="welcome">Home</option>
<option value="chat">Chat</option>
<option value="contact">Change Password</option>
<option value="logout">Logout</option>

</select></div>

<script type="text/javascript">
function handleSelect(elm)
{
window.location = elm.value+".php";
}
</script>
     

    
</body>
</html>

