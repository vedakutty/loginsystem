<?php
include 'connect.php';

if(isset($_POST["submit"]))

{
    $firstname =$_POST["Firstname"];
    $Middlename=$_POST["Middlename"];
	$lastname =$_POST["Lastname"];
    $Illam=$_POST["Illam"];
	$Address1 =$_POST["Address1"];
    $Address2=$_POST["Address2"];
	$Address3 =$_POST["Address3"];
    $District=$_POST["District"];
	$Pincode =$_POST["Pincode"];
    $Mobile1=$_POST["Mobile1"];
	$Mobile2 =$_POST["Mobile2"];
    $Sex=$_POST["Sex"];
	$Dateofbirth=$_POST["Dateofbirth"];
	$Fathersname =$_POST["Father'sname"];
    $Mothersname=$_POST["Mother'sname"];
	$job =$_POST["job"];
    $JobLocation=$_POST["Location"];

}

$result=mysqli_query($con,"INSERT INTO register(Firstname,Middlename,Lastname,Illam,Address1,Address2,Address3,District,Pincode,Mobilenumber1,Mobilenumber2,sex,Dateofbirth,Fathersname,Mothersname,Job,joblocation)VALUES('$firstname',' $Middlename','$lastname',' $Illam','$Address1','$Address2','$Address3',' $District','$Pincode',' $Mobile1','$Mobile2',' $Sex','$Dateofbirth','	$Fathersname','$Mothersname','$job',' $JobLocation')");
if($result)
{echo"Registered Successfully";}
else
{echo"Failed";}


?>