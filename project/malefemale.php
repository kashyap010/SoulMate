<html>
<?php 
	require_once 'connection.php';
	if ($conn->connect_error)
	{
			die("connection failed:" . $conn->connect_error);
	}
        
	$sql = "select count(*) as male from userprofile where gender ='M'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$male = $data['male'];

	if(! $data['male'] ) {
     		 die('Could not get data: ' . mysql_error());
   }

   $sql = "select count(*) as female from userprofile where gender ='F'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	$female = $data['female'];

	if(! $data['female'] ) {
     		 die('Could not get data: ' . mysql_error());
   }
?>