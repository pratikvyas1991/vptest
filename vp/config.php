<?php
	$host="fdb15.biz.nf";
	$username="2142887_test";
	$password="Pratikvyas1991#";
	$databasename="2142887_test";
	$tablename="users";


$con=mysqli_connect($host,$username,$password,$databasename);
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 //  else{
	// 	echo "Sucess Fully Connected ";
	// }

	
?>
