<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "youtube";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con){
	echo "error";
}
$fname=$_POST["firstname"];
$lname = $_POST["lastname"];
$email=$_POST["email"];
$subject = $_POST["subject"];

$sql = "INSERT INTO `test`(`fname`, `lname`, `email`, `subject`) VALUES ('$fname','$lname','$email','$subject')";
$result = mysqli_query($con, $sql);
if($result){
	echo "submitted";
}
else{
	echo "error";
}

?>

