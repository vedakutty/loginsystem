<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
    function  colorchange(obj){

      obj.style.backgroundColor=(obj.style.backgroundColor==""?"#f7fe2e":"");
    }

    </script>

  <script type="text/javascript" src="myJavaScript.js"></script>
  
    <link rel="stylesheet" href="style.css">
    <title>loginpage</title>
</head>
<body>

<div class="topnav">

  <a class="active" href="index.php">Home</a>
  <a href="#">About</a>
  <a href="#">why we</a>
  <a href="#">Portfolio</a>

  <div class="login-container">
      <?php
if(isset($_SESSION['userid'])){
  echo'<a href="contactform.php">Add Contact</a>
   <form action="includes/search.inc.php"class="form-container"method="post">
  <input type="text" placeholder="Search..." name="search">
  <button type="submit"name="search-submit">Search</button>
</form>';
  
  echo' <form action="includes/logout.inc.php"class="form-container"method="post">
     
  <button type="submit"name="logout-submit">Logout</button>
</form>';
}
else{
  echo'<form action="includes/login.inc.php"class="form-container"method="post">
  <input type="text" placeholder="Username/E-mail" name="mailuid"required>
  <input type="password" placeholder="Password" name="psw"required>
  <button type="submit"name="login-submit">Login</button>
</form>






<a class="topnav signanch "href="signup.php">Sign Up here</a>';
}

      ?>
    
   

    
</div>
    
  </div>







</body>
</html>