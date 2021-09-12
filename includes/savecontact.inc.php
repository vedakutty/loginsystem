
  


<?php
if(isset($_POST['contact-submit'])){
require 'dbh.inc.php';
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$illam=$_POST['illam'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$address3=$_POST['address3'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$mobile1=$_POST['mobile1'];
$mobile2=$_POST['mobile2'];
$gender=$_POST['gender'];
$dateofbirth=$_POST['dob'];
$job=$_POST['job'];
$joblocation=$_POST['joblocation'];
    

$sql="INSERT INTO customer(firstname, middlename, lastname, illam, fathername, mothername,address1,address2,address3, districtname, pincode, mobile1, mobile2, gender,dateofbirth, job, joblocation)VALUES ('$firstname','$middlename','$lastname','$illam','$fathername','$mothername','$address1','$address2','$address3','$district','$pincode','$mobile1','$mobile2','$gender','$dateofbirth','$job','$joblocation')";
$result=mysqli_query($conn,$sql);
if($result){
  $alert="<script >alert('Contact details has been saved successfully!'); </script>";
  echo $alert;
  
 $_SESSION['userid']=$row['idUsers'];
  $_SESSION['useruid']=$row['uidUsers'];
  header("Location: ..//insertmsg.php?insert=success");
  /*FOR TESTING*/
 

 
   

/*header("Location: ../index.php");
exit();*/
}
else{
    $alert="<script>alert('Insertion failed,try again!'); </script>";
    

}

}