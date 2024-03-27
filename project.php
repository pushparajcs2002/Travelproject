<?php
$n=$_POST['sname'];
$s=$_POST['semail'];
$t=$_POST['sdatetime'];
$u=$_POST['sspecialrequest'];
$con=mysqli_connect("localhost","root","","project");
$sql="INSERT INTO customerdetails(Customer_Name,Customer_Email,Date_Time,Special_Request) values ('$n','$s','$t','$u')";
$r=mysqli_query($con,$sql);
if($r)
{
   echo "Successfully Submit";
}
else 
{
   echo 'not added';
}
?>
