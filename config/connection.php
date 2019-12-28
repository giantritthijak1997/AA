<?php
include 'init.php';
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "testfilesystem";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully <br>";

// อันนี้ไม่เกี่ยว ลบได้ ลองquery เฉยๆ 
if ($result = mysqli_query($conn, "SELECT * FROM files")) {
	//echo "Returned rows are: " . mysqli_num_rows($result);
	mysqli_free_result($result);
}

?>