<?php
	include('config.php');
	// include('config1.php');
	$queryM="select * from $tablename ;";
	$query=mysqli_query($con,$queryM);
	// $query=mysql_query($queryM);
	$myRow=array();
	while($row=mysqli_fetch_array($query)){
		$values=array('Id'=>$row[0],'First Name'=>$row[1],'First Name'=>$row[2],'Email'=>$row[3],
			'Password'=>$row[4],'Status'=>$row[5]);
		array_push($myRow,$values);
	}
	$finalArr=array("students"=>$myRow);
	 echo json_encode($finalArr);	
	// print_r($finalArr);
?>
