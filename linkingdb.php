
<?php

$connect = mysqli_connect("localhost","root","","testing");    

$a=$_POST['u_name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['message'];


$cdate=date("Y-m-d");
$status=1;
$sql="INSERT INTO `regi`( `u_name`, `email`, `phone`, `message`, `cdate`,  `status`) 
VALUES ('$a','$b','$c','$d','$cdate','$status')";
$qry=mysqli_query($connect,$sql);
if($qry==TRUE)
{
	echo "record added";
	

}
else{
	echo "wrong";
}

?>