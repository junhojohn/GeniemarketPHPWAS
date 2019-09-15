<?php
	$con = mysqli_connect("localhost", "geniemarketdb", "kk753030!", "geniemarketdb");
	
	$productName = $_POST["productName"];
	$productPrice = $_POST["productPrice"];
	$productItemCnt = $_POST["productItemCnt"];
	$productDescription = $_POST["productDescription"];
	$bigCategory = $_POST["bigCategory"];
	$midCategory = $_POST["midCategory"];
	$smallCategory = $_POST["smallCategory"];
	$sellerID = $_POST["sellerID"];
	$productImage1 = $_POST["productImage1"];
	$productImage2 = $_POST["productImage2"];
	$productImage3 = $_POST["productImage3"];
	$productImage4 = $_POST["productImage4"];
	$productImage5 = $_POST["productImage5"];

	$statement = mysqli_prepare($con, "INSERT INTO SELLERINFO VALUES (?,?,?,?,?,?);");
	mysqli_stmt_bind_param($statement, "ssssss", $sellerID, $sellerID, $sellerID, $sellerID, $sellerID, $sellerID);
	mysqli_stmt_execute($statement);
	
	$statement = mysqli_prepare($con, "INSERT INTO PRODUCTINFO VALUES (?,?,?,?,?,?,?,?);");
	mysqli_stmt_bind_param($statement, "ssssssss", $productName, $productPrice, $productItemCnt, $productDescription, $bigCategory, $midCategory, $smallCategory, $sellerID);
	mysqli_stmt_execute($statement);
	
	$statement = mysqli_prepare($con, "INSERT INTO IMAGEPATHINFO VALUES (?,?,?);");
	mysqli_stmt_bind_param($statement, "sss", $productImage1, $productName, $sellerID);
	mysqli_stmt_execute($statement);

	$statement = mysqli_prepare($con, "INSERT INTO IMAGEPATHINFO VALUES (?,?,?);");
	mysqli_stmt_bind_param($statement, "sss", $productImage2, $productName, $sellerID);	
	mysqli_stmt_execute($statement);
	
	$statement = mysqli_prepare($con, "INSERT INTO IMAGEPATHINFO VALUES (?,?,?);");
	mysqli_stmt_bind_param($statement, "sss", $productImage3, $productName, $sellerID);	
	mysqli_stmt_execute($statement);
	
	$statement = mysqli_prepare($con, "INSERT INTO IMAGEPATHINFO VALUES (?,?,?);");
	mysqli_stmt_bind_param($statement, "sss", $productImage4, $productName, $sellerID);
	mysqli_stmt_execute($statement);
	
	$statement = mysqli_prepare($con, "INSERT INTO IMAGEPATHINFO VALUES (?,?,?);");
	mysqli_stmt_bind_param($statement, "sss", $productImage5, $productName, $sellerID);	
	mysqli_stmt_execute($statement);
		
	$response = array();
	$response["isProductRegisterSuccess"] = true;
	
	echo json_encode($response);
?> 
