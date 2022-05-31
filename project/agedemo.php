<?php 
	require_once 'connection.php';
	if ($conn->connect_error)
	{
			die("connection failed:" . $conn->connect_error);
	}
        
	$sql = "select count(*) as range1 from userprofile where age between 18 and 24 ";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$range1 = $data['range1'];

    $sql = "select count(*) as range2 from userprofile where age between 25 and 40 ";
    $result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$range2 = $data['range2'];

    $sql = "select count(*) as range3 from userprofile where age between 41 and 50 ";
    $result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$range3 = $data['range3'];

    $sql = "select count(*) as range4 from userprofile where age > 50 ";
    $result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$range4 = $data['range4'];

	/*if(! $data['totalmatches'] ) {
     		 die('Could not get data: ' . mysql_error());
   }*/
?>
