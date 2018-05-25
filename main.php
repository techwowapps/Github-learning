<?php
include('db.php');
$barcode=$_POST['barcode'];
//date_default_timezone_set('Asia/Calcutta');
//$current_timestamp=date('Y-m-d H:i:s');
$result=mysqli_query($con,"delete from barcode_entry where barcode = '$barcode'");
if($result)
{
	$json['status']=1;
}
else
{
	$json['status']=0;
}
echo json_encode($json);
?>