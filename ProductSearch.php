<?php
	$con = mysqli_connect("localhost", "geniemarketdb", "kk753030!", "geniemarketdb");
#	$sql = "SELECT productName, sellerID, productPrice, productItemCnt, productDescription FROM PRODUCTINFO";
	$sql = "SELECT prodInfo.productName, prodInfo.sellerID, prodInfo.productPrice, prodInfo.productItemCnt, prodInfo.productDescription, imgInfo.imageFilePath FROM PRODUCTINFO prodInfo, IMAGEPATHINFO imgInfo WHERE prodInfo.productName = imgInfo.productName AND prodInfo.sellerID = imgInfo.sellerID;";
	mysqli_set_charset($con, "utf8");
	$res = mysqli_query($con, $sql);
	$result = array();
	
	while($row = mysqli_fetch_array($res)){
		
		array_push($result, array('productName'=>$row[0],'sellerID'=>$row[1], 'productPrice'=>$row[2], 'productItemCnt'=>$row[3], 'productDescription'=>$row[4], 'imageFilePath'=>$row[5]));
	}
 
	echo json_encode(array("result"=>$result));

	mysql_close($con);
?>