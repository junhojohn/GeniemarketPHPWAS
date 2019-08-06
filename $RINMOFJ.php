<?php
	$con = mysqli_connect("localhost", "geniemarketdb", "kk753030!", "geniemarketdb");
	 
	$sellerName = $_POST["sellerName"];
	$productName = $_POST["productName"];
	$productPrice = $_POST["productPrice"];
	$productDescription = $_POST["productDescription"];
	$productItemCnt = $_POST["productItemCnt"];
	
	$statement = mysqli_prepare($con, "INSERT INTO PRODUCTINFO VALUES (?,?,?,?,?);");
	mysqli_stmt_bind_param($statement, "sssi", "JFamily", $productName, $productPrice, $productItemCnt, $productDescription);
	mysqli_stmt_execute($statement);

	$response = array();
	$response["success"] = true;
	
	echo json_encode($response);
?> 