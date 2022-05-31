<?php 
	require_once 'connection.php';
	if ($conn->connect_error)
	{
			die("connection failed:" . $conn->connect_error);
	}
        
	$sql = "select count(*) as bannedusers from usertable where userstate = 2";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	echo $data['bannedusers'];

	if(! $data['bannedusers'] ) {
     		 die('Could not get data: ' . mysql_error());
   }
?>