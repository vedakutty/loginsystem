<html>
  <body>
<?php
include'header.php';
include'includes/dbh.inc.php';

?>
<div class="contactform_wrap"><h1 class="contact_head">Contact Management</h1>
<div class="astrik">All Fields with <span>*</span>are required</div>
  <form method="post">
   
  <table id="tablecontactform">
  <tr>
 <td> <label for="fname" class="required">First Name</label></td>
 <td><div class="note"> <input class="table_input " type="text" id="fname" name="firstname" placeholder="Your name..."onfocus="colorchange(this)"onblur="colorchange(this)"required><span class="notetext">Please add salutations like Brahmasri,Mr,Mrs,Ms ...</span></div></td>
 </tr>
<tr>
  <td><label for="mname"class="required">Middle Name</label></td>
 <td> <input type="text" id="mname" name="middlename" placeholder="Your middle name..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
 </tr>
 <tr>
 <td> <label for="lname"class="required">Last Name</label>
 <td> <input type="text" id="lname" name="lastname" placeholder="Your last name..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
 </tr>
 <tr> 
 <td><label for="illam"class="required">Illam</label>
 <td> <input type="text" id="illam" name="illam" placeholder="Enter name of Illam..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
 </tr>
 <tr>
 <td><label for="fathername"class="required">Father's Name</label>
 <td> <input type="text" id="fathername" name="fathername" placeholder="Enter name of father..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
 </tr>
 <tr>
 <td><label for="mothername">Mother's Name</label>
 <td> <input type="text" id="mothername" name="mothername" placeholder="Enter name of mother..."onfocus="colorchange(this)"onblur="colorchange(this)"></td>
 </tr>
 <tr>
 <td> <label for="address1"class="required">Address1</label>
 <td> <input type="text" id="address1" name="address1" placeholder="Address1..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
 </tr>
  <tr>
  <td><label for="address2">Address2</label>
 <td> <input type="text" id="address2" name="address2" placeholder="Address2..."onfocus="colorchange(this)"onblur="colorchange(this)"></td>
 </tr>
 <tr>
 <td> <label for="address3">Address3</label>
 <td> <input type="text" id="address3" name="address3" placeholder="Address3..."onfocus="colorchange(this)"onblur="colorchange(this)"></td>
 </tr>
 <tr>
 <td> <label for="district"class="required">District Name</label>
 <td> <input type="text" id="district" name="district" placeholder="Name of District..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
 </tr>
 <tr>
 <td> <label for="pincode"class="required">Pincode</label>
 <td> <input type="number" id="pincode" name="pincode" placeholder="Enter pincode ..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
 </tr>
 <tr>
 <td> <label for="mobile1"class="required">Mobile_1</label>
 <td> <input type="number" id="mobile1" name="mobile1" placeholder="Enter mobile_1 ..."onfocus="colorchange(this)"onblur="colorchange(this)"></td>
 </tr>
 <tr>
 <td> <label for="mobile2">Mobile_2</label>
 <td> <input type="number" id="mobile2" name="mobile2" placeholder="Enter mobile_2..."onfocus="colorchange(this)"onblur="colorchange(this)"></td>
 </tr>
 <td> <label for="email" class="required">E_mail</label>
 <td> <input type="email" id="email" name="email" placeholder="Enter Email  here..."onfocus="colorchange(this)"onblur="colorchange(this)"></td>
 </tr>
 

  <tr>
  <td><label for="gender">Gender</label></td>
  <td>
 
  
  <select id="gender" name="gender"onfocus="colorchange(this)"onblur="colorchange(this)">
  <option value="male" default >select</option>
    <option value="male">Male</option>
    <option value="male">Female</option>
  </select>
  </td>
  </tr>
  <tr>
  <td> <label for="dob"class="required">Date of birth</label>
  <td> <input type="date" id="dob" name="dob" placeholder="Enter date of birth..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
  </tr>
  <tr>
  <td> <label for="job">Job</label></td>
  <td>


  <select id="job" name="job"onfocus="colorchange(this)"onblur="colorchange(this)">
  <option value="sel" default >select</option>
    <option value="govt">Govt</option>
    <option value="private">Private</option>
    <option value="others">Others</option>
 </select>
  </td>
  </tr>
 
 <tr>
  <td><label for="joblocation">Job Location</label></label>
 <td> <input type="text" id="joblocation" name="joblocation" placeholder="Enter your Job location..."onfocus="colorchange(this)"onblur="colorchange(this)"></td>
 </tr>
<tr>
<td colspan="2">
  <input type="submit" value="Submit"name="contact-submit">
  
  </td>
</tr>
  </table>
  
  </form>
  
  </div>
  <!--test-->
  <?php
if(isset($_POST['contact-submit'])){
require 'includes/dbh.inc.php';
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$illam=$_POST['illam'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$email=$_POST['email'];
$address3=$_POST['address3'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$mobile1=$_POST['mobile1'];
$mobile2=$_POST['mobile2'];
$gender=$_POST['gender'];
$dateofbirth=$_POST['dob'];
$job=$_POST['job'];
$joblocation=$_POST['joblocation'];
    

$sql="INSERT INTO customer(firstname, middlename, lastname, illam, fathername, mothername,address1,address2,address3, districtname, pincode, mobile1, mobile2,email, gender,dateofbirth, job, joblocation)VALUES ('$firstname','$middlename','$lastname','$illam','$fathername','$mothername','$address1','$address2','$address3','$district','$pincode','$mobile1','$mobile2','$email','$gender','$dateofbirth','$job','$joblocation')";
$result=mysqli_query($conn,$sql);
if($result){
  $alert="<script >alert('Contact details has been saved successfully!'); </script>";
  echo $alert;
  
/* $_SESSION['userid']=$row['idUsers'];
  $_SESSION['useruid']=$row['uidUsers'];
  header("Location: ..//insertmsg.php?insert=success");*/
  /*FOR TESTING*/
 

 
   

/*header("Location: ../index.php");
exit();*/
}
else{
    $alert="<script>alert('Insertion failed,try again!'); </script>";
    

}

}
?>
  <table id="testtable" >
  <thead>
  <tr>
  <th>Sl No</th>
  <th>First Name</th>
  <th>Middle Name</th>
  <th>Last Name</th>
  <th>Illam</th>
  <th>Father Name</th>
  <th>Mother Name</th>
  <th>Address 1</th>
  <th>Address 2</th>
  <th>Address 3</th>
  <th>District Name</th>
  <th>Pincode</th>
  <th>Mobile-1</th>
  <th>Mobile-2</th>
  <th>E_mail</th>
  <th>Gender</th>
  <th>Date of Birth</th>
  <th>Job</th>
  <th>Job Location</th>
  <th colspan="3" style="text-align:center">Operations</th>
  </tr>
  </thead>
  <tbody>
  <?php
     $limit=3;
     if(isset($_GET['page'])){
$page=$_GET['page'];
     }else{
       $page=1;
     }
    
     $offset=($page-1)*$limit;
  $sqltest="SELECT * FROM  customer  LIMIT $offset,$limit";
  $resulttest=mysqli_query($conn,$sqltest);
  if(mysqli_num_rows($resulttest)>0){
while($row=mysqli_fetch_assoc($resulttest)){
  $id=$row['id'];
  $firstname=$row['firstname'];
  $middlename=$row['middlename'];
  $lastname=$row['lastname'];
  $illam=$row['illam'];
  $fathername=$row['fathername'];
  $mothername=$row['mothername'];
  $address1=$row['address1'];
  $address2=$row['address2'];
  $address3=$row['address3'];
  $districtname=$row['districtname'];
  $pincode=$row['pincode'];
  $mobile1=$row['mobile1'];
  $mobile2=$row['mobile2'];
  $email=$row['email'];
  $gender=$row['gender'];
  $dateofbirth=$row['dateofbirth'];
  $job=$row['job'];
  $joblocation=$row['joblocation'];
  echo'<tr>
  <th scope="row">'.$id.'</th>
  <td >'.$firstname.'</td>
  <td>'.$middlename.'</td>
  <td>'.$lastname.'</td>
  <td>'.$illam.'</td>
  <td>'.$fathername.'</td>
  <td>'.$mothername.'</td>
  <td>'.$address1.'</td>
  <td>'.$address2.'</td>
  <td>'.$address3.'</td>
  <td>'.$districtname.'</td>
  <td>'.$pincode.'</td>
  <td>'.$mobile1.'</td>
  <td>'.$mobile2.'</td>
  <td>'.$email.'</td>
  <td>'.$gender.'</td>
  <td>'.$dateofbirth.'</td>
  <td>'.$job.'</td>
  <td>'.$joblocation.'</td>
  <td>
  
         <button class="button"><a href="update.php?updateid='.$id.'"class="text-light">Update</a></button></td>
       <td> <button  class="button"style="background-color:blue"><a href="donate.php?donateid='.$id.'"class="text-light">Donate</a></button></td>';
        $sql_del="SELECT * FROM receipt_table WHERE user_id=$id";
        $result_del=mysqli_query($conn,$sql_del);
         if (mysqli_num_rows($result_del) =='0') {
      echo' <td> <button  class="button"style="background-color:red"><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button></td>';
         }
   echo'  
   
  </tr>
  ';

}

  }

?>;
 </tbody>
</table>

<div class="center">
  <div class="pagination">
 
<?php
$pagelink="";
echo "<a  href='?page=1'>First</a>"; 
if($page>=2){   
  echo "<a href='?page=".($page-1)."'>  Prev </a>"; } 
$sql="SELECT COUNT(*) FROM  customer"; 
      $result=mysqli_query($conn,$sql);
      $total_rows=mysqli_fetch_array($result)[0];
      $total_page=ceil($total_rows/$limit);
      
for($i=1;$i<=$total_page;$i++){
  
 echo "<a  href='?page=$i'>".$i."</a>";
 }
 if($page<$total_page){   
  echo "<a href='?page=".($page+1)."'>  Next </a>";   
} 
echo "<a  href='?page=$total_page'>Last</a>";
?>


</div>
</div> 
<div></div>
</body>
</html>
  
