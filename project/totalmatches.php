<?php 
	require_once 'connection.php';
	if ($conn->connect_error)
	{
			die("connection failed:" . $conn->connect_error);
	}
        
	$sql = "select count(*) as totalmatches from `match` where status='match' ";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	echo $data['totalmatches'];

	if(! $data['totalmatches'] ) {
     		 die('Could not get data: ' . mysql_error());
   }
?>