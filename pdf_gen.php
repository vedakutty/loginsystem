<?php
require'FPDF/fpdf.php';
require'includes/dbh.inc.php';
   if(isset($_GET['pdfid'])){
    $id=$_GET['pdfid'];
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
     

   $pdf = new FPDF('L','mm','A4');
       $pdf->AddPage();
       // Set font

$pdf->SetFont('Arial','B',12);
$pdf->Cell('40',10,'Receipt Number',1,0,'C');
$pdf->Cell('40',10,'Full Name',1,0,'C');
$pdf->Cell('40',10,'Father Name',1,0,'C');
$pdf->Cell('40',10,'Illam',1,0,'C');
$pdf->Cell('40',10,'Mode Of Payment',1,0,'C');
$pdf->Cell('40',10,'Amount',1,0,'C');
$pdf->Cell('40',10,'Remarks',1,1,'C');
$pdf->Cell('40',10,$receipt_number,1,0,'C');
$pdf->Cell('40',10,$fullname,'1',0,'C');
$pdf->Cell('40',10,$fathername,1,0,'C');
$pdf->Cell('40',10,$illam,1,0,'C');
$pdf->Cell('40',10,$bycash,1,0,'C');
$pdf->Cell('40',10,'Remarks',1,0,'C');
$pdf->Cell('40',10,$remark,1,0,'C');


$pdf->Output();
   }
         ?>