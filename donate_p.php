<?php
if($_POST)
{
$con=mysqli_connect("localhost","root","root","bd");
$email=$_POST['email'];
$name=$_POST['name'];
$age=$_POST['age'];
$phoneno=$_POST['phoneno'];
$blood=$_POST['blood'];
$gender=$_POST['gender'];

$q=mysqli_query($con,"insert into blood(email,name,age,phoneno,blood,gender) values('$email','$name','$age','$phoneno','$blood','$gender')");
if($q)
{
	echo "<script>alert('You have Succesfully Registered')</script>";
	echo "<script>window.open('donation.html','_self');</script>";
}
else
{
	echo mysqli_error($con);
}
mysqli_close($con);
}
else
{
	echo "Not post";
}



?>