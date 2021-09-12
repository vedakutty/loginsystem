<?php
include'includes/dbh.inc.php';

if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql = "DELETE FROM customer WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result){
   $alert="<script >alert('Contact detailsof  has been deleted successfully!'); </script>";
  echo $alert;
echo"deleted successfully";
/*header('location:display.php');*/
header('location:contactform.php');


}
else{
    
    die(mysqli_error($conn));
}

}

?>