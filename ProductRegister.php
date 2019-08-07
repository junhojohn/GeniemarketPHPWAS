<?php
	$con = mysqli_connect("localhost", "geniemarketdb", "kk753030!", "geniemarketdb");
	
	$productName = $_POST["productName"];
	$productPrice = $_POST["productPrice"];
	$productItemCnt = $_POST["productItemCnt"];
	$productDescription = $_POST["productDescription"];
	$sellerID = $_POST["sellerID"];
	$productImage1 = $_POST["productImage1"];
	
	$statement = mysqli_prepare($con, "INSERT INTO PRODUCTINFO VALUES (?,?,?,?,?);");
	mysqli_stmt_bind_param($statement, "sssss", $productName, $productPrice, $productItemCnt, $productDescription, $sellerID);
	mysqli_stmt_execute($statement);
	
	$statement = mysqli_prepare($con, "INSERT INTO IMAGEPATHINFO VALUES (?,?,?);");
	mysqli_stmt_bind_param($statement, "sss", $productImage1, $productName, $sellerID);
	mysqli_stmt_execute($statement);
	
	$response = array();
	$response["isProductRegisterSuccess"] = true;
	
	echo json_encode($response);
?> 