<?php 
	require_once 'connection.php';
	if ($conn->connect_error)
	{
			die("connection failed:" . $conn->connect_error);
	}
        
	$sql = "select * from usertable";
	$result = mysqli_query($conn, $sql);
    echo "<table border='1'>
    <tr>
        <th>user id</th>
        <th>name</th>
        <th>age</th>
        <th>gender</th>
    </tr>";
	$data = mysqli_fetch_assoc($result);
	echo $data['totalmatches'];

	if(! $data['totalmatches'] ) {
     		 die('Could not get data: ' . mysql_error());
   }
?>