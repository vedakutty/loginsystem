<?php
include'header.php';

?>

<main>

    <div class="outerdiv">

<section>
<?php

if(isset($_GET['error'])){
    if($_GET['error']=="emptyfields"){
        echo'<p class="signuperror">Fill in all fields!</p>';
    }
    else if($_GET['error']=="invaliduidmail"){
        echo'<p class="signuperror">Invalid Username And E-mail!</p>';

    }
    else if($_GET['error']=="invaliduid"){
        echo'<p class="signuperror">Invalid UserName!</p>';

    }
    else if($_GET['error']=="invalidmail"){
        echo'<p class="signuperror">Invalid E-mail!</p>';

    }
    else if($_GET['error']=="addnumber"){
      echo'<p class="signuperror">Add Atleast One Number!</p>';

  }
  else if($_GET['error']=="adduppercase"){
    echo'<p class="signuperror">Add Atleast One Capital Alphabet!</p>';

}
else if($_GET['error']=="addlowercase"){
  echo'<p class="signuperror">Add Atleast One Small Alphabet!</p>';

}
else if($_GET['error']=="addspecialchar"){
  echo'<p class="signuperror">Add Atleast One Special Character!</p>';

}
else if($_GET['error']=="add8char"){
  echo'<p class="signuperror">Add Atleast 8 Charcters!</p>';

}

    else if($_GET['error']=="passwordcheck"){
        echo'<p class="signuperror">Your password donot match!</p>';

    }
    else if($_GET['error']=="usertaken"){
        echo'<p class="signuperror">User already exisit!</p>';
        
    }

}
    else if(isset($_GET['signup'])&&($_GET['signup']=="success")){
      
        echo'<p class="signupcorrect">Sign up successful!</p>';
    
    }

 
?>
    



<div class="contactform_wrap"><h1 class="contact_head">Sign Up</h1>
<form action="includes/signup.inc.php" method="post">

<table id="tablecontactform">
  <tr>
  <tr>
 <td> <label for="username">User Name</label></td>
 <td> <input  type="text" id="username" name="uid" placeholder="Your name..."></td>
 </tr>
<tr>
  <td><label for="email">E-mail</label></td>
 <td> <input  type="text" id="email" name="mail" placeholder="E-mail"></td>
 </tr>
 <tr>
 <td> <label for="signuppsw">Password</label>
 <td> <input  type="password" id="signuppsw" name="pwd" placeholder="Your password"style="width:100%;padding:8px;"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&*!~]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter,one special character and at least 8 or more characters" required></td>
 
 </tr>
 <tr> 
 <td><label for="illam">Confirm Password</label>
 <td> <input  type="password" id="illam" name="pwd-repeat" placeholder="Enter your password again..."style="width:100%; padding:8px;"></td>
 </tr>
 <tr>
 <td colspan="2">
<input type="submit"name="signup-submit"value="Submit">
</td>
</tr>
</table>
</form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <div id="letter" class="invalid">A <b>lowercase</b> letter</div>
  <div id="capital" class="invalid">A <b>capital (uppercase)</b> letter</div>
  <div id="number" class="invalid">A <b>number</b></div>
  <div id="length" class="invalid">Minimum <b>8 characters</b></div>
  <div id="special" class="invalid">Minimum <b> one special character</b></div>
</div>
				
<script>
var myInput = document.getElementById("signuppsw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var special = document.getElementById("special");


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  var specialchar = /[!@~*#$^&]/g;
  if(myInput.value.match(specialchar)) {  
    special.classList.remove("invalid");
    special.classList.add("valid");
  } else {
    special.classList.remove("valid");
    special.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>







</section>
</div>
</main>
<?php
require"footer.php";

?>