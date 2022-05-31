<?php 
	require_once 'connection.php';
	if ($conn->connect_error)
	{
			die("connection failed:" . $conn->connect_error);
	}
        
	$sql = "select count(*) as activeusers from usertable where active = 'Active now'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	echo $data['activeusers'];

	// if(! $data['activeusers'] ) {
    //  		 die('Could not get data: ' . mysql_error());
   //}
?>