<?php
$server="localhost";
$username="root";
$password="";
$dbn="proproduct";

$con = mysqli_connect($server,$username,$password,$dbn);

if(isset($_POST['Submit'])){

	if((!empty($_POST['name'])) and (!empty($_POST['email'])) &&(!empty($_POST['address'])) &&(!empty($_POST['phone'])) &&(!empty($_POST['code'])) && (!empty($_POST['mode'])) && (!empty($_POST['sel']))){
		
$txtName = $_POST['name'];
$txtemail = $_POST['email'];
$txtAddress = $_POST['address'];
$txtphone = $_POST['phone'];
$txtcode=$_POST['code'];
$textmode=$_POST['mode'];
$state=$_POST['sel'];

$sql = "INSERT INTO Details(Name,Email,Address,PhoneNumber,PinCode,PaymentMode,State) VALUES('$txtName', '$txtemail', '$txtAddress', '$txtphone','$txtcode','$textmode','$state')";
$run= mysqli_query($con,$sql);

header("location:./m2.php");

if($run){
	
	echo "form submitted..";
	}
	else{
		echo "Form not submitted..";
	}
}
else{
	echo "All fields are required...";
}
}
$con->close();
?>
