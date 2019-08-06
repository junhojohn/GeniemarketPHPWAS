<?php
	$con = mysqli_connect("localhost", "geniemarketdb", "kk753030!", "geniemarketdb");
	mysqli_autocommit($con,TRUE);
	
	$productImage1 = $_POST["productImage1"];
	
	$statement = mysqli_prepare($con, "INSERT INTO IMAGEPATHINFO2 VALUES (?);");
	mysqli_stmt_bind_param($statement, "sssi", $productImage1);
	mysqli_stmt_execute($statement);
	
	$response = array();
	$response["success"] = true;
	$response["productImage1"] = $productImage1;
	$response["sql"] = $statement;
	
	echo json_encode($response);
?> 