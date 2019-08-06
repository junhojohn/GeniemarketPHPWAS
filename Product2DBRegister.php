<?php
	$con = mysqli_connect("localhost", "geniemarketdb", "kk753030!", "geniemarketdb");
	
	$productName = $_POST["productName"];
	$productPrice = $_POST["productPrice"];
	$productDescription = $_POST["productDescription"];
	$productItemCnt = $_POST["productItemCnt"];
	$sellerID = $_POST["sellerID"];
	$productImage1 = $_POST["productImage1"];
	
	$statement = mysqli_prepare($con, "INSERT INTO PRODUCTINFO2 VALUES (?,?,?,?,?,?);");
	mysqli_stmt_bind_param($statement, "sssp", $productName, $productPrice, $productItemCnt, $productDescription, $sellerID, $productImage1);
	mysqli_stmt_execute($statement);
	
	$response = array();
	$response["success"] = true;
	
	echo json_encode($response);
?> 