<?php
include'header.php';
include'includes/dbh.inc.php';

?>
<div class="recviewhead">
    <h2>SREE RAGHAVAPURAM SABHAYOGAM</h2>
    <p>Registration No:252525255</p>
    <p>Rama Nivas,</p>
    <p>Cheruthazham,</p>
    <p>Kanuur District,</p>
    <p>Kerala State.</p>
    <p>E-mail:sreeraghavpuram@gmail.com</p>
    <p>Phone No:123456789</p>
</div>
<br>
<table id="receipttable" >
  <thead>
 <!-- <tr>
  <th>Receipt Number</th>
  <th>Full Name</th>
  <th>Father'Name</th>
  <th>Illam</th>
  <th>By Cash-Amount</th>
  <th>By Cheque-Amount</th>
  <th>Cheque-Number</th>
  <th>By Net transfer_Amount</th>
  <th>Transaction_Id</th>
  <th>Date of Payment</th>
  <th>Remarks</th>
 
  </tr>-->
  </thead>
 <tbody>
    <?php 
    include'includes/dbh.inc.php';
    
    $id=$_GET['viewid'];
$sql="SELECT * FROM receipt_table WHERE receipt_no=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$receipt_number=$row['receipt_no'];
 $user_id=$row['user_id'];
$firstname=$row['firstname'];
$middlename=$row['middlename'];
$lastname=$row['lastname'];
$fathername=$row['fathername'];
$illam=$row['illam'];
$bycash=$row['bycash'];
$bycheque=$row['bycheque'];
$cheque_no=$row['cheque_no'];
$bynet=$row['bynet'];
$bynet_id=$row['net_id'];
$dop=$row['dop'];
$remark=$row['remark'];
$fullname=$firstname." ".$middlename." ".$lastname;
if($bycash>0){
echo'<th>Receipt Number</th>
  <th>Full Name</th>
  <th>FatherName</th>
  <th>Illam</th>
  <th>By Cash-Amount</th>
 
  <th>Date of Payment</th>
  <th>Remarks</th>';

     
echo'<tr>
<th scope="row">'.$receipt_number.'</th>
  <td >'.$fullname.'</td>
  <td>'.$fathername.'</td>
  <td>'.$illam.'</td>
  <td>'.$bycash.'</td>

  <td>'.$dop.'</td>
  <td>'.$remark.'</td>
  
</tr>';
}
if($bycheque>0){
    echo'<th>Receipt Number</th>
      <th>Full Name</th>
      <th>FatherName</th>
      <th>Illam</th>
      <th>By Cheque-Amount</th>
  <th>Cheque-Number</th>
     <th>Date of Payment</th>
      <th>Remarks</th>';
    
         
    echo'<tr>
    <th scope="row">'.$receipt_number.'</th>
      <td >'.$fullname.'</td>
      <td>'.$fathername.'</td>
      <td>'.$illam.'</td>
      <td>'.$bycheque.'</td>
      <td>'.$cheque_no.'</td>
    
      <td>'.$dop.'</td>
      <td>'.$remark.'</td>
      
    </tr>';
    }
    if($bynet>0){
        echo'<th>Receipt Number</th>
          <th>Full Name</th>
          <th>FatherName</th>
          <th>Illam</th>
          <th>By Net transfer_Amount</th>
         <th>Transaction_Id</th>
     
         <th>Date of Payment</th>
          <th>Remarks</th>';
        
             
        echo'<tr>
        <th scope="row">'.$receipt_number.'</th>
          <td >'.$fullname.'</td>
          <td>'.$fathername.'</td>
          <td>'.$illam.'</td>
          <td>'.$bynet.'</td>
          <td>'.$bynet_id.'</td>
          <td>'.$dop.'</td>
          <td>'.$remark.'</td>
          
        </tr>';
        }
?>

</tbody>


