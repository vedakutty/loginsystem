<?php
include'header.php';
include'includes/dbh.inc.php';
$id=$_GET['donateid'];
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
  ?>
  <?php
  if(isset($_POST['donate-submit'])){
    $id=$_GET['donateid'];
    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $illam=$_POST['illam'];
    $fathername=$_POST['fathername'];
    $chk=$_POST['chk'];
    $bycashbox1=$_POST['txtBox1'];
  $chequebox2=$_POST['txtBox2'];
    $chequeidbox3=$_POST['txtBox3'];
  $netbox4=$_POST['txtBox4'];
    $netidbox5=$_POST['txtBox5'];
  $dop=$_POST['dop'];
    $remark=$_POST['remark'];  
 $sql="INSERT INTO receipt_table(user_id,firstname,middlename,lastname,fathername,illam,bycash,bycheque,cheque_no,bynet,net_id,dop,remark)VALUES('$id','$firstname','$middlename','$lastname','$fathername','$illam','$bycashbox1','$chequebox2',' $chequeidbox3',' $netbox4','$netidbox5','$dop','$remark')";
  $result=mysqli_query($conn,$sql);
  if($result){
    $alert="<script >alert('Receipt details has been saved successfully!'); </script>";
    echo $alert;
  }else{
    $alert="<script>alert('Insertion failed,try again!'); </script>";
    
  }
}
 ?>
  

  <!--*form receipt-->
<form method="post">
  <div class="contactform_wrap"><h1 class="contact_head">Receipt</h1>
  <!--<div style="background-color:aliceblue">
  <table id="receipt">
    <tr>
    <td> <label for="receiptNum"class="required">Receipt Number</label>
<td> <input type="number" id="receiptNum" name="receiptNum" placeholder="Enter date of  Receipt here..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
<td> <label for="dor"class="required">Date Of Receipt</label>
  <td> <input type="date" id="dor" name="dor" placeholder="Enter date of  Receipt here..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
  
 </tr>
  </table>
</div>-->
<div class="astrik">All Fields with <span>*</span>are required</div>
 
  <table id="tablecontactform">
  <tr>
 <td> <label for="fname"class="required">First Name</label></td>
 <td><div class="note"> <input class="table_input" type="text" id="fname" name="firstname" placeholder="Your name..."readonly value=<?php echo $firstname;?>><span class="notetext">Please add salutations like Brahmasri,Mr,Mrs,Ms ...</span></div></td>
 </tr>
<tr>
  <td><label for="mname"class="required">Middle Name</label></td>
 <td> <input type="text" id="mname" name="middlename" placeholder="Your middle name..."readonly value=<?php echo $middlename;?>></td>
 </tr>
 <tr>
 <td> <label for="lname"class="required">Last Name</label>
 <td> <input type="text" id="lname" name="lastname" placeholder="Your last name..."readonly value=<?php echo $lastname;?>></td>
 </tr>
 <tr> 
 <td><label for="illam"class="required">Illam</label>
 <td> <input type="text" id="illam" name="illam" placeholder="Enter name of Illam..."readonly value=<?php echo $illam;?>></td>
 </tr>
 <tr>
 <td><label for="fathername"class="required">Father's Name</label>
 <td> <input type="text" id="fathername" name="fathername" placeholder="Enter name of father..."readonly value=<?php echo $fathername;?>></td>
 </tr>
 
 <tr>
   <td colspan="2"><div class="contact_head">Transaction-Details</div><td>
</tr>
<tr>
<!--<td>Mode Of Payment</td>
<td><label for="chkYes"> By Cash</label>
    <input type="radio" id="cash" name="chk"value="cash" onclick="ShowHideDiv1()" />
    <label for="chkYes"> By Cheque</label>
    <input type="radio" id="cheque" name="chk" value="cheque"onclick="ShowHideDiv2()" />
    <label for="chkYes"> By Netbanking</label>
    <input type="radio" id="net" name="chk"value="net" onclick="ShowHideDiv3()" />

 
<div  class="txt"id="dvtext1" style="display: none">
    Amount:<span style='font-size:15px;'>&#8360;</span>
    <input type="text" id="txtBox1"name= "txtBox1"placeholder="Enter Amount Here..."/>
</div>
<div class="txt" id="dvtext2" style="display: none">
    Amount:<span style='font-size:15px;'>&#8360;</span>
    <input type="text" id="txtBox2"name= "txtBox2"placeholder="Enter Amount Here..."/>
    Cheque No:
    <input type="text" id="txtBox2"name= "txtBox3"placeholder="Enter Cheque Number..."/>
</div>
<div  class="txt"id="dvtext3" style="display: none">
    Amount:<span style='font-size:15px;'>&#8360;</span>
    <input type="text" id="txtBox2"name= "txtBox4"placeholder="Enter Amount Here..."/>
    Transaction Id: 
    <input type="text" id="txtBox2"name= "txtBox5"placeholder="Enter Transaction Id..."/>
</div>
</td>
</tr>-->

<tr>
  <td>Mode of Payment</td>
  <td>
  <label for="payment"></label>
  <select id="payment" name="payment" id="payment">
  <option value="sel" default >select</option>
    <option value="bycash">By_Cash </option>
    <option value="bycheque">By_Cheque</option>
    <option value="bynetbanking">By_NetBanking</option>
    <option value="googlepay">Google_Pay</option>
    <option value="microatm">Micro_ATMS</option>
    <option value="aeps">AEPS</option>
    <option value="upi">UPI</option>
    <option value="mobilewallets">Mobile_Wallets</option> 
    <option value="ussd">USSD</option>
    <option value="type1">type1</option>
    <option value="type2">type2</option>
    <option value="type3">type3</option>
 </select>
 <div  class="txt"id="dvtext1" style="display: none">
    Amount:<span style='font-size:15px;'>&#8360;</span>
    <input type="text" id="txtBox1"name= "txtBox1"placeholder="Enter Amount Here..."/>
</div>
<div class="txt" id="dvtext2" style="display: none">
<table style="width:100%">
  <tr> 
   <td style="text-align:right; background-color:#acdcdf;width:20%">  Amount:<span style='font-size:15px;'>&#8360;</span></td>
   <td> <input type="text" id="txtBox2"name= "txtBox2"placeholder="Enter Amount Here..."/></td></tr>
  <tr><td style="text-align:right; background-color:#acdcdf">  Cheque No:</td>
  <td>  <input type="text" id="txtBox2"name= "txtBox3"placeholder="Enter Cheque Number..."/></td></tr>
</table>
</div>
<div  class="txt"id="dvtext3" style="display: none">
  

     Amount:<span style='font-size:15px;'>&#8360;</span>
    <input type="text" id="txtBox2"name= "txtBox4"placeholder="Enter Amount Here..."/>
   Transaction Id: 
    <input type="text" id="txtBox2"name= "txtBox5"placeholder="Enter Transaction Id..."/>

</div>
  </td>
  </tr>
<tr>
  <td> <label for="dop"class="required">Payment Date</label>
  <td> <input type="date" id="dop" name="dop" placeholder="Enter date of Payment here..."onfocus="colorchange(this)"onblur="colorchange(this)"required></td>
  </tr>
<td>Remarks:</td>
<td>   <textarea id="remarks" name="remark" placeholder="Make Remarks.." style="height:50px"onfocus="colorchange(this)"onblur="colorchange(this)"></textarea></td>

</tr>

<tr>
<td colspan="2">
  <input type="submit" value="Submit"name="donate-submit">
  
  </td>
</tr>
  </table>
  
  </form>
</div> 

  <table id="testtable" >
  <thead>
  <tr>
  <th>Receipt No</th>
  <th>User-Id</th>
  <th>First Name</th>
  <th>Middle Name</th>
  <th>Last Name</th>
  <th>Illam</th>
  <th>Father Name</th>
  <th>Amount By cash</th>
  <th>Amount By Cheque</th>
  <th>cheque Number</th>
  <th>Amount By Netbanking</th>
  <th>Transaction Id</th>
  <th>Date of Payment</th>
  <th>Remarks</th>
 
  
  <th colspan="3" style="text-align:center">Operations</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $sqltest="SELECT * FROM  receipt_table ";
  $resulttest=mysqli_query($conn,$sqltest);
  if(mysqli_num_rows($resulttest)>0){
while($row=mysqli_fetch_assoc($resulttest)){
  $receiptno=$row['receipt_no'];
  $id=$row['user_id'];
  $firstname=$row['firstname'];
  $middlename=$row['middlename'];
  $lastname=$row['lastname'];
  $illam=$row['illam'];
  $fathername=$row['fathername'];
  $bycash=$row['bycash'];
  $address1=$row['bycheque'];
  $address2=$row['cheque_no'];
  $address3=$row['bynet'];
  $districtname=$row['net_id'];
  $pincode=$row['dop'];
  $mobile1=$row['remark'];
  
  echo'<tr>
  <th scope="row">'.$receiptno.'</th>
  <td>'.$id.'</td>
  <td >'.$firstname.'</td>
  <td>'.$middlename.'</td>
  <td>'.$lastname.'</td>
  <td>'.$illam.'</td>
  <td>'.$fathername.'</td>
  <td>'.$bycash.'</td>
  <td>'.$address1.'</td>
  <td>'.$address2.'</td>
  <td>'.$address3.'</td>
  <td>'.$districtname.'</td>
  <td>'.$pincode.'</td>
  <td>'.$mobile1.'</td>
  
  
  <td>
  
         <button class="button"><a href="recview.php?viewid='.$receiptno.'"class="text-light">View</a></button></td> 
      <td> <button  class="button"style="background-color:blue"><a href="pdf_gen.php?pdfid='.$receiptno.'"class="text-light"target="_blank">Print</a></button></td>
       <td> <button  class="button"style="background-color:blue"><a href="recupdate.php?donateid='.$receiptno.'"class="text-light">UpDate</a></button>
        
     
     </td>
  
  ';

}

  }

?>;
  
  </tbody>
  </table>
  
<script> 
/*function ShowHideDiv1() {
        var chkYes = document.getElementById("cash");
        var dvtext = document.getElementById("dvtext1");
        dvtext.style.display = chkYes.checked ? "block" : "none";
    }
    function ShowHideDiv2() {
        
        var chkYes = document.getElementById("cheque");
        var dvtext = document.getElementById("dvtext2");
        dvtext.style.display = chkYes.checked ? "block" : "none";
    }
    function ShowHideDiv3() {
         var chkYes = document.getElementById("net");
        var dvtext = document.getElementById("dvtext3");
        dvtext.style.display = chkYes.checked ? "block" : "none";
    }*/
    document.getElementById("payment").addEventListener("change", myFunction);
    function myFunction(){
      var payment=document.getElementById("payment");
var cash=document.getElementById("dvtext1");
var cheque=document.getElementById("dvtext2");
var net=document.getElementById("dvtext3");
if(payment.value=="bycash"){
  cash.style.display="block";
}
if(payment.value=="bycheque"){
  cheque.style.display="block";
}
if(payment.value=="bynetbanking"){
  net.style.display="block";
}
if(payment.value=="googlepay"){
  net.style.display="block";
}
if(payment.value=="microatm"){
  net.style.display="block";
}
if(payment.value=="aeps"){
  net.style.display="block";
}
if(payment.value=="upi"){
  net.style.display="block";
}
if(payment.value=="mobilewallets"){
  net.style.display="block";
}
if(payment.value=="ussd"){
  net.style.display="block";
}
if(payment.value=="type1"){
  net.style.display="block";
}
if(payment.value=="type2"){
  net.style.display="block";
}
if(payment.value=="type3"){
  net.style.display="block";
}
  }
    </script>
<!--form end-->