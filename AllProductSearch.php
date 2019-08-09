<?php
	$con = mysqli_connect("localhost", "geniemarketdb", "kk753030!", "geniemarketdb");
    
	if(mysqli_connect_errno($con)){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	mysqli_set_charset($con, "utf8");
	
    $res=mysql_query($con, "SELECT * FROM PRODUCTINFO");
	
	$result = array();
	
	while($row = mysqli_fetch_array($res)){
		
		array_push($result, array('productName'=>$row[0],'sellerID'=>$row[1]));
	}
 
	echo json_encode(array("result"=>$result));
 
    mysql_close($con);

?>