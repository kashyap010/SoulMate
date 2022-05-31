<?php 
	require_once 'connection.php';
	if ($conn->connect_error)
	{
			die("connection failed:" . $conn->connect_error);
	}
        
	$sql = "select count(*) as totalusers from usertable";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	echo $data['totalusers'];

	if(! $data['totalusers'] ) {
     		 die('Could not get data: ' . mysql_error());
   }
?>