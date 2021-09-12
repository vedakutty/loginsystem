<?php
include'header.php';
include'includes/dbh.inc.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM customer WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
  $gender=$row['gender'];
  $dateofbirth=$row['dateofbirth'];
  $job=$row['job'];
  $joblocation=$row['joblocation'];

  if(isset($_POST['contact-submit'])){
   // require 'includes/dbh.inc.php';
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
    $sql="UPDATE customer set id='$id',firstname='$firstname',middlename='$middlename',lastname='$lastname',illam='$illam',fathername='$fathername',mothername='$mothername',address1='$address1',address2='$address2',address3='$address3',districtname='$district',pincode='$pincode',mobile1='$mobile1',mobile2='$mobile2',gender='$gender',dateofbirth='$dateofbirth',job='$job',joblocation='$joblocation'WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        header('location:contactform.php');
    }else{
        die(mysqli_error($conn));
    }
  }
  
?>

<div class="contactform_wrap"><h1 class="contact_head">Contact Management</h1>
<div class="astrik">All Fields with <span>*</span>are required</div>
  <form method="post">
  <table id="tablecontactform">
  <tr>
 <td> <label for="fname"class="required">First Name</label></td>
 <td><div class="note"> <input class="table_input" type="text" id="fname" name="firstname"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Your name..."value=<?php echo $firstname;?>><span class="notetext">Please add salutations like Brahmasri,Mr,Mrs,Ms ...</span></div></td>
 </tr>
<tr>
  <td><label for="mname"class="required">Middle Name</label></td>
 <td> <input type="text" id="mname" name="middlename"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Your middle name..."value=<?php echo $middlename;?>></td>
 </tr>
 <tr>
 <td> <label for="lname"class="required">Last Name</label>
 <td> <input type="text" id="lname" name="lastname"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Your last name..."value=<?php echo $lastname;?>></td>
 </tr>
 <tr> 
 <td><label for="illam"class="required">Illam</label>
 <td> <input type="text" id="illam" name="illam"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Enter name of Illam..."value=<?php echo $illam;?>></td>
 </tr>
 <tr>
 <td><label for="fathername"class="required">Father's Name</label>
 <td> <input type="text" id="fathername" name="fathername" onfocus="colorchange(this)"onblur="colorchange(this)"placeholder="Enter name of father..."value=<?php echo $fathername;?>></td>
 </tr>
 <tr>
 <td><label for="mothername">Mother's Name</label>
 <td> <input type="text" id="mothername" name="mothername"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Enter name of mother..."value=<?php echo $mothername;?>></td>
 </tr>
 <tr>
 <td> <label for="address1"class="required">Address1</label>
 <td> <input type="text" id="address1" name="address1" onfocus="colorchange(this)"onblur="colorchange(this)"placeholder="Address1..."value=<?php echo $address1;?>></td>
 </tr>
  <tr>
  <td><label for="address2">Address2</label>
 <td> <input type="text" id="address2" name="address2"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Address2..."value=<?php echo $address2;?>></td>
 </tr>
 <tr>
 <td> <label for="address3">Address3</label>
 <td> <input type="text" id="address3" name="address3"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Address3..."value=<?php echo $address3;?>></td>
 </tr>
 <tr>
 <td> <label for="district"class="required">District Name</label>
 <td> <input type="text" id="district" name="district"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Name of District..."value=<?php echo $districtname;?>></td>
 </tr>
 <tr>
 <td> <label for="pincode"class="required">Pincode</label>
 <td> <input type="number" id="pincode" name="pincode"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Enter pincode ..."value=<?php echo $pincode;?>></td>
 </tr>
 <tr>
 <td> <label for="mobile1"class="required">Mobile_1</label>
 <td> <input type="number" id="mobile1" name="mobile1"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Enter mobile_1 ..."value=<?php echo $mobile1;?>></td>
 </tr>
 <tr>
 <td> <label for="mobile2">Mobile_2</label>
 <td> <input type="number" id="mobile2" name="mobile2"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Enter mobile_2..."value=<?php echo $mobile2;?>></td>
 </tr>
 

  <tr>
  <td></td>
  <td>
  <label for="gender">Gender</label>
  <select id="gender" name="gender"onfocus="colorchange(this)"onblur="colorchange(this)">
  <option value="male" default ><?php echo $gender;?></option>
    <option value="male">Male</option>
    <option value="male">Female</option>
  </select>
  </td>
  </tr>
  <tr>
  <td> <label for="dob"class="required">Date of birth</label>
  <td> <input type="date" id="dob" name="dob"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Enter date of birth..."value=<?php echo $dateofbirth;?>></td>
  </tr>
  <tr>
  <td></td>
  <td>
  <label for="job">Job</label>
  <select id="job" name="job"onfocus="colorchange(this)"onblur="colorchange(this)">
  <option value="sel" default ><?php echo $job;?></option>
    <option value="govt">Govt</option>
    <option value="private">Private</option>
    <option value="others">Others</option>
 </select>
  </td>
  </tr>
 
 <tr>
  <td><label for="joblocation">Job Location</label></label>
 <td> <input type="text" id="joblocation" name="joblocation"onfocus="colorchange(this)"onblur="colorchange(this)" placeholder="Enter your Job location..."value=<?php echo $joblocation;?>></td>
 </tr>
<tr>
<td colspan="2">
  <input type="submit" value="Submit"name="contact-submit">
  
  </td>
</tr>
  </table>
  
  </form>
</div> 