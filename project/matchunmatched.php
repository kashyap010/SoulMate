<?php 
	require_once 'connection.php';
	if ($conn->connect_error)
	{
			die("connection failed:" . $conn->connect_error);
	}
        
	$sql = "select count(*) as matches from `match` where status = 'match'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$matched = $data['matches'];
    
    $sql = "select count(*) as totalusers from usertable";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$unmatched = $data['totalusers'] - $matched;

	if(! $data['totalusers'] ) {
     		 die('Could not get data: ' . mysql_error());
   }
?>