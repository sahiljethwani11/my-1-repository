<?php
$x=$_POST['source1'];
$y=$_POST['source2'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql1 = "SELECT * FROM demo; ";


$row = array();
if (mysqli_query($conn, $sql1)) {
   $result=mysqli_query($conn,$sql1);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		//$row = mysqli_fetch_assoc($result);
		$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
		echo json_encode($row); 
	}else{
    		echo "0 results";
	}
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}










?>
