<?php
	$con = mysqli_connect("localhost", "geniemarketdb", "kk753030!", "geniemarketdb");
	mysqli_autocommit($con,TRUE);
	
	$productImage1 = $_POST["productImage1"];
	$productName = $_POST["productName"];
	$sellerID = $_POST["sellerID"];
	
	$statement = mysqli_prepare($con, "INSERT INTO IMAGEPATHINFO VALUES (?,?,?);");
	mysqli_stmt_bind_param($statement, "sss", $productImage1, $productName, $sellerID);
	mysqli_stmt_execute($statement);
	
	$response = array();
	$response["isImageRegisterSuccess"] = true;
	
	echo json_encode($response);
?> 